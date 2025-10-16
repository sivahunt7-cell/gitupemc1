<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Cloth Sales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>User Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <p><a href="forgot_password.php">Forgot Password?</a></p>
    <p>New user? <a href="register.php">Register</a></p>
</div>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        echo "<script>alert('Login Successful!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password!');</script>";
    }
}
?>
