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
    $aboutus = (string) $app->post_request('aboutus');
    $accessibility = (string) $app->post_request('accessibility');
    $policies = (string) $app->post_request('policies');
    $important_note = (string) $app->post_request('important_note');
   
    $hotels_id = ($app->post_request('hotelsng'));
    // Create an array of sanitized and validated user input
    $data = [
        "aboutus" => $aboutus,
        "accessibility" => $accessibility,
        "policies" => $policies,
        "important_note" => $important_note,
        "business_account" => $hotels_id,
    ];
    // var_dump($data);
    // update business_accounts table using data array
    $updateSql = "UPDATE business_accounts SET aboutus = :aboutus, accessibility = :accessibility, policies = :policies, important_note = :important_note WHERE business_account = :business_account";

    try {
        $result = $app->executeQuery($updateSql, $data);
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage()); // Log error instead of displaying
        echo "An error occurred. Please try again later.";
    }

}
?>