<?php

session_start();
include "include/db_connection.php";
header('Content-Type: application/json');
// login-check.php


if ($_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_POST['log_in']) 
    && $_POST['login'] == 1) {

    // Get inputs
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email == '' || $password == '') {
        echo "Email and password required";
        exit;
    }

    // Email check
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Password verify (encrypted)
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['id']    = $user['id'];

            echo "Login successful";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "Email does not exist";
    }

    $stmt->close();
    $conn->close();
    exit;
}

