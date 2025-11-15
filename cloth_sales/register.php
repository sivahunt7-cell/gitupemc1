<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register - Cloth Sales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

<div class="navbar">
    <div class="left"><a href="index.php">🏠 Home</a></div>
    <div class="right">
        <a href="login.php">🔐 Login</a>
        <a href="register.php">📝 Register</a>
    </div>
</div>

<div class="form-box">
    <h2>Create Account</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button name="register">Register</button>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $exists = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($exists) > 0) {
        echo "<script>alert('Email already registered!');</script>";
    } else {
        mysqli_query($conn, "INSERT INTO users (username,email,password) VALUES('$username','$email','$password')");
        echo "<script>alert('Registered Successfully!'); window.location='login.php';</script>";
    }
}
?>
