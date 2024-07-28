<?php

// Include authentication verification
include "../../../config/auth_verify.php";
include "../file_upload.php";

// Initialize the Manager class and create an instance of it
$app = new Manager();

// Suppress errors and warnings
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Fetch and sanitize user input
    $hotel_id = $app->post_request('hotelid');
    $description = $app->post_request('description');
    // Validate user input
    if (!is_numeric($hotel_id) || strlen($hotel_id) < 4) {
        die("Invalid hotel.");
    }

    @$file1 = "file";

    $img_path1 = upload_img($file1, $file_size_allowed, $min_size_compress, $ticket_pic);

    // $description = "eweew"; // Assuming this will be dynamic, you might want to fetch it from a POST request as well

    // Create an array of sanitized and validated user input
    $data = [
        "photo_path" => $img_path1,
        "hotel_id" => $hotel_id,
        "description" => $description,
    ];

    // SQL query with placeholders
    $sql = "INSERT INTO hotel_gallery (hotel_id, description, photo_path) VALUES (:hotel_id, :description, :photo_path)";

    try {
        $result = $app->executeQuery($sql, $data);

    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }
}
?>