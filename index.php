<?php
include 'connect.php';

// Fetch all users from DB
$result = $conn->query("SELECT * FROM clients");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="form-container">
    <h2>Register User</h2>

    <form method="POST" action="register.php" class="main-form">

        <div class="form-row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Mohammed" required>
        </div>

        <div class="form-row">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="18" required>
        </div>

        <div class="form-row submit-row">
            <input type="submit" value="Submit">   
        </div>

    </form>

</div>



<hr>

<h2>All Registered Users</h2>

<div class="table-container">
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        include 'connect.php';
        $result = $conn->query("SELECT * FROM clients");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
            echo "<td>" . ($row['status'] == 1 ? '1' : '0') . "</td>";
            echo "<td>
                    <form method='POST' action='toggle_status.php' class='inline-form'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='submit' value='Toggle' class='toggle-btn'>
                    </form>
                  </td>";
            echo "</tr>";
        }

        if ($result->num_rows == 0) {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>

</body>
</html>
