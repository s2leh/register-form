<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values and sanitize
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = (int) $_POST['age'];

    $sql = "INSERT INTO clients (Name, Age) VALUES ('$name', $age)";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
