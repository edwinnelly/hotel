<?php
session_start();
include "./auth_verify.php";
$app = new Manager();
// include "sql/sql.php";

// Check if the user is logged in
if (!isset($_SESSION['login_user']) || $app->checkLogin() != "logged") {
    echo '<script>window.location.href="sign-in";</script>';
    exit();
}

$users_ids = $_SESSION['login_user'];

// Get user info using a prepared statement
$query = "SELECT employeeid, access_level_id, username,emp_account, photo FROM employee WHERE email_address = :email_address";
$params = [':email_address' => $users_ids];
$userInfos = $app->fetchData($query, $params);

if (empty($userInfos)) {
    // Handle case where user info is not found
    echo '<script>window.location.href="sign-in";</script>';
    exit();
}

$userInfo = $userInfos[0];
$employeeid = $userInfo['employeeid'];
$access_level_id = $userInfo['access_level_id'];
$username = $userInfo['username'];
$photo = $userInfo['photo'];
echo $emp_account = $userInfo['emp_account'];

// // Redirect based on access level
// switch ($access_level_id) {
//     case 1:
//         echo '<script>window.location.href="apps/app.php";</script>';
//         break;
//     case 2:
//         echo '<script>window.location.href="r/dashboard.php";</script>';
//         break;
//     case 3:
//     case 4:
//     case 5:
//     default:
//         echo '<script>window.location.href="sign-in";</script>';
//         break;
// }

