<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "clients";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}

// Optional: set charset
$conn->set_charset("utf8mb4");
?>
