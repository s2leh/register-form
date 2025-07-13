<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Fetch current status
    $sql = "SELECT status FROM clients WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentStatus = (int) $row['status'];
        $newStatus = $currentStatus === 1 ? 0 : 1;

        // Update the status
        $update = "UPDATE clients SET status = $newStatus WHERE id = $id";
        $conn->query($update);
    }
}

$conn->close();

// Redirect back to the form page
header("Location: index.php");
exit();
?>
