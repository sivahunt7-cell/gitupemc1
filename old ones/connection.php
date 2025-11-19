<?php
$host = "localhost";
$user = "root";   // change if you have a different username
$pass = "";       // add your MySQL password
$db   = "carsales";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
