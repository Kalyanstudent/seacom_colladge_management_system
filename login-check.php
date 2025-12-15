<?php
session_start();
include "include/db_connection.php";
header('Content-Type: application/json');

$response = [
    "success" => 0,
    "message" => "Invalid request"
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_POST['login']) 
    && $_POST['login'] == 1) {

    $email    = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email === '' || $password === '') {
        $response['message'] = "Email and password required";
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['id']    = $user['id'];

            $response['success'] = 1;
            $response['message'] = "Login successful";
        } else {
            $response['message'] = "Incorrect password";
        }
    } else {
        $response['message'] = "Email does not exist";
    }

    $stmt->close();
    $conn->close();
}

echo json_encode($response);
exit;
