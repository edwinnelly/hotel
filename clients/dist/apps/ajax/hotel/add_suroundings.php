<?php
session_start();

// Check if the user has the necessary permissions
include "../../../config/auth_verify.php";

$max_requests = 5; // maximum number of requests
$period = 60; // time period in seconds

// Implement rate limiting
$app = new Manager(); // Ensure Manager class is initialized before use
if ($app->rateLimit($max_requests, $period)) {
    die("Too many requests. Please try again later.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Invalid CSRF token.");
    }

    // Fetch and sanitize user input
    $name_category = htmlspecialchars((string) $app->post_request('name_category'), ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars((string) $app->post_request('description'), ENT_QUOTES, 'UTF-8');
    $distance = htmlspecialchars($app->post_request('distance'), ENT_QUOTES, 'UTF-8');
    $category = filter_var($app->post_request('category'), FILTER_SANITIZE_NUMBER_INT);
    $hotels_id = filter_var($app->post_request('hotels'), FILTER_SANITIZE_NUMBER_INT);

    // Validate user input
    if (!is_numeric($category) || $category <= 0) {
        die("Invalid category.");
    }

    $created = date('Y-m-d H:i:s');
    $hotel_account = rand(12345678, 123456780);

    // Create an array of sanitized and validated user input
    $data = [
        "name" => $name_category,
        "description" => $description,
        "distance" => $distance,
        "category_id" => $category,
        "hotel_id" => $hotels_id,
        // "created_at" => date('Y-m-d H:i:s')
    ];

    // Insert the hotel data into the database using prepared statements
    // $insertSql = "INSERT INTO nearby_places (hotel_id, category_id, name, description, distance) VALUES (:hotel_id, :category_id, :name, :description, :distance)";
    $insertSql = "INSERT INTO nearby_places (hotel_id,category_id,name,description,distance) VALUES (:hotel_id,:category_id,:name,:description,:distance)";

    try {
        $result = $app->executeQuery($insertSql, $data);
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }
}
?>
