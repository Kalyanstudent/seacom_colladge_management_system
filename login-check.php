<?php
include "include/db_connection.php";


header('Content-Type: application/json');

$response = [];

if(isset($_POST['login'])) {
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // test purpose
    if($email == "test@gmail.com" && $password == "123") {
        $response['success'] = 1;
        $response['message'] = "Login successful";
    } else {
        $response['success'] = 0;
        $response['message'] = "Invalid email or password";
    }
} else {
    $response['success'] = 0;
    $response['message'] = "Invalid request";
}

echo json_encode($response);


?>
