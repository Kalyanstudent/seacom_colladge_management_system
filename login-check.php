<?php
session_start();
include "include/db_connection.php";
header('Content-Type: application/json');

$response = [
    "success" => 0,
    "message" => "Invalid request"
];

if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST['login'])
    && $_POST['login'] == 1
) {

    // Get inputs
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email === '' || $password === '') {
        $response['message'] = "Email and password required";
        echo json_encode($response);
        exit;
    }

    // Escape email (VERY IMPORTANT)
    $email = mysqli_real_escape_string($conn, $email);

    //  Correct SQL (email must be in quotes)
    $sql = "SELECT User_ID, email, password 
        FROM users 
        WHERE email = '" . $email . "'";


    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify encrypted password
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['User_ID'] = $user['User_ID'];

            $response['success'] = 1;
            $response['message'] = "Login successful";
        } else {
            $response['message'] = "Incorrect password";
        }
    } else {
        $response['message'] = "Email does not exist";
    }

    mysqli_close($conn);
}

echo json_encode($response);
exit;
