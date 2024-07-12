<?php
session_start();
include "config/controller.php";
$app = new Manager();

// Fetch and sanitize user input
$email = (string) $app->post_request('email');
$password = (string) $app->post_request('password');

if (isset($email, $password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Fetch the stored password hash from the database
        $query = "SELECT email_address, password FROM employee WHERE email_address = :email_address";
        $params = [':email_address' => $email];
        $result = $app->fetchData($query, $params);

        if($result && password_verify($password, $result[0]['password'])) {
            session_regenerate_id();
            // Initializing Session
            $_SESSION['login_user'] = $email;

            // Generate a secure random token
            $secure_token = bin2hex(random_bytes(32));
            $_SESSION['csrf_token'] = $secure_token;

            // Update user login key in the database
            $key_lock_query = "UPDATE employee SET login_sec = :login_sec WHERE email_address = :email_address";
            
            $key_lock_params = [
                ':login_sec' => $secure_token,
                ':email_address' => $email
            ];

            // Execute the query
            $app->executeQuery($key_lock_query, $key_lock_params);

        }

    } else {
        echo 'invalid email format';
    }
} else {
    echo 'missing email or password';
}
