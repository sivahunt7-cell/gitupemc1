<?php
$host = "localhost";
$dbname = "icecream_shop";
$user = "root";
$pass = ""; // or your actual DB password

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
