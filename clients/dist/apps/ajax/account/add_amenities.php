<?php
// Check if the user has the necessary permissions
include "../../../config/auth_verify.php";

// Initialize the Manager class and create an instance of it
$app = new Manager();

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

    $facilities = $_POST['facilities'] ?? [];
    $hotelid = $app->post_request('hotelid');

    // Validate and sanitize the hotel ID
    if (!filter_var($hotelid, FILTER_VALIDATE_INT)) {
        die("Invalid hotel ID.");
    }

    try {
        // Insert each selected facility
        foreach ($facilities as $facility_name) {
            // Sanitize facility name
            $facility_name = htmlspecialchars($facility_name, ENT_QUOTES, 'UTF-8');

            // Check if the facility already exists for the hotel
            $checkSql = "SELECT * FROM hotel_facilities WHERE facility_name = :facility_name AND hotel_id = :hotel_id";
            $checkData = [
                "facility_name" => $facility_name,
                "hotel_id" => $hotelid
            ];
            $exists = $app->fetchData($checkSql, $checkData);

            if (count($exists) > 0) {
                // Skip insertion if the facility already exists
                continue;
            }

            // Insert the new facility
            $insertSql = "INSERT INTO hotel_facilities (facility_name, hotel_id) VALUES (:facility_name, :hotel_id)";
            $result = $app->executeQuery_multiple($insertSql, $checkData);
        }
        echo "Success";
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }
}

