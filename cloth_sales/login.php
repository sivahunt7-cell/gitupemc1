<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Login - Cloth Sales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bg >

<div class="navbar">
    <div class="left"><a href="index.php">🏠 Home</a></div>
    <div class="right">
        <a href="login.php">🔐 Login</a>
        <a href="register.php">📝 Register</a>
    </div>
</div>

<div class="form-box">
    <h2>User Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button name="login">Login</button>
    </form>
    <a href="forgot_password.php" class="link">Forgot Password?</a>
</div>
</center>

</body>
</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($pass, $row['password'])) {
        echo "<script>alert('Login Successful!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>
