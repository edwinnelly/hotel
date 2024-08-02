<?php
// Include authentication verification
include "../../../config/auth_verify.php";

// Initialize the Manager class and create an instance of it
$app = new Manager();

$max_requests = 5; // Maximum number of requests
$period = 60; // Time period in seconds

// Implement rate limiting
if ($app->rateLimit($max_requests, $period)) {
    die("Too many requests. Please try again later.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Fetch and sanitize user input
     $hotel_id = base64_decode($app->post_request('hotelid'));
     $amenities_id = base64_decode($app->post_request('id_del'));

    // Validate user input
    if (!is_numeric($amenities_id) || strlen($amenities_id) < 0) {
        die("Invalid amenities.");
    }
    if (!is_numeric($hotel_id) || strlen($hotel_id) < 4) {
        die("Invalid hotel.");
    }

    // Create an array of sanitized and validated user input
    $data = [
        "facility_id" => $amenities_id,
        "hotel_id" => $hotel_id,
    ];

    // Prepare the SQL statement for deleting the amenities from the database
    $sql = "DELETE FROM nearby_places WHERE id = :facility_id AND hotel_id = :hotel_id";

    try {
        $result = $app->executeQuery($sql, $data);
        
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }
}
?>
