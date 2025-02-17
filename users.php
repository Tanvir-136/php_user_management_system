<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registered Users</h2>
    <a href="dashboard.php">Back to Dashboard</a>
    <div>
        <?php
        require 'db.php';
        $stmt = $conn->query("SELECT id, username FROM users ORDER BY id ASC");
        while ($row = $stmt->fetch()) {
            echo "<p><strong>ID:</strong> {$row['id']} - <strong>Username:</strong> {$row['username']}</p>";
        }
        ?>
    </div>
</body>
</html>