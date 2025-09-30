<?php
$host = 'localhost';
$db   = 'col_man_system';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    // ❌ Connection failed
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Connection successful
echo "Connected successfully";

// Proceed with further code here...
?>