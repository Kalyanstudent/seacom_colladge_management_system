<?php
include "include/db_connection.php";

if(isset($_POST['login'])) {

    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($role == 'student'){
        $table = "students";
    } elseif($role == 'teacher'){
        $table = "teachers";
    } else {
        $table = "admins";
    }

    $check = mysqli_query($conn, "SELECT * FROM $table WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($check) > 0){
        echo json_encode([
            "success" => 1,
            "message" => "Login Success"
        ]);
    } else {
        echo json_encode([
            "success" => 0,
            "message" => "Invalid Email or Password"
        ]);
    }
}
?>
