<?php
session_start();

// Check if the user has the necessary permissions
include "../../../config/auth_verify.php";

$max_requests = 5; // maximum number of requests
$period = 60; // time period in seconds

// Implement rate limiting
if ($app->rateLimit($max_requests, $period)) {
    die("Too many requests. Please try again later.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Invalid CSRF token.");
    }

    // Initialize the Manager class and create an instance of it
    $app = new Manager();

    // Fetch and sanitize user input
    $hotel_name = htmlspecialchars((string) $app->post_request('hotel_name'), ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars((string) $app->post_request('address'), ENT_QUOTES, 'UTF-8');
    $phone = filter_var($app->post_request('phone'), FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($app->post_request('email'), FILTER_SANITIZE_EMAIL);
    $longitude = filter_var($app->post_request('long'), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $latitude = filter_var($app->post_request('lat'), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $rooms = filter_var($app->post_request('rooms'), FILTER_SANITIZE_NUMBER_INT);
    $description = htmlspecialchars((string) $app->post_request('description'), ENT_QUOTES, 'UTF-8');
    $states_of_nigeria = htmlspecialchars((string) $app->post_request('states_of_nigeria'), ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars((string) $app->post_request('country'), ENT_QUOTES, 'UTF-8');

    // Validate user input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }
    if (!is_numeric($phone) || strlen($phone) < 8) {
        die("Invalid phone number.");
    }
    if (!is_numeric($longitude) || !is_numeric($latitude)) {
        die("Invalid coordinates.");
    }
    if (!is_numeric($rooms) || $rooms <= 0) {
        die("Invalid number of rooms.");
    }

    $created = date('Y-m-d H:i:s');
    $hotel_account = rand(12345678, 123456780);

    // Create an array of sanitized and validated user input
    $data = [
        "hotel_name" => $hotel_name,
        "address" => $address,
        "phone" => $phone,
        "email_address" => $email,
        "longitude" => $longitude,
        "latitude" => $latitude,
        "rooms" => $rooms,
        "description" => $description,
        "hotel_state" => $states_of_nigeria,
        "country" => $country,
        "created" => $created,
        "hotel_account" => $hotel_account,
        "employeeid" => $emp_account, // Assuming $emp_account is defined and sanitized
    ];

    // Insert the hotel data into the database using prepared statements
    $insertSql = "INSERT INTO hotels_list (hotel_name, address, phone, email_address, longitude, latitude, username, description, hotel_state, country, added_date, hotel_account, agent_id) VALUES (:hotel_name, :address, :phone, :email_address, :longitude, :latitude, :rooms, :description, :hotel_state, :country, :created, :hotel_account, :employeeid)";

    try {
        $result = $app->executeQuery($insertSql, $data);
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }
}
