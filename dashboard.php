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
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .dashboard-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin: 0 10px;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        .logout-link {
            color: #dc3545;
        }
        .logout-link:hover {
            color: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
        <p>You are logged in.</p>
        <div>
            <a href="users.php">View Users</a> |
            <a href="logout.php" class="logout-link">Logout</a>
        </div>
    </div>
</body>
</html>
