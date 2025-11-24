<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Create Account</h2>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <button name="register" class="btn">Register</button>
</form>

<a href="index.php" class="back-btn">Back</a>

<?php
include "db.php";

if(isset($_POST['register'])){
    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = $_POST['password'];

    mysqli_query($connect, "INSERT INTO users(username,email,password) VALUES('$u','$e','$p')");

    echo "<script>alert('Registered Successfully!'); window.location='login.php';</script>";
}
?>

</body>
</html>
