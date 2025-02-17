<?php
// Define database connection parameters
$host = "localhost";
$user = "root";
$pass = "";
$db = "my_database";

try {
    // Create a new PDO instance for database connection
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enables exception handling
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch results as associative arrays
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
