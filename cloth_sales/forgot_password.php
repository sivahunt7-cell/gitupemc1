<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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
    <h2>Reset Password</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="new_pass" placeholder="New Password" required><br>
        <input type="password" name="confirm_pass" placeholder="Re-enter New Password" required><br>
        <button name="reset">Update</button>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST['reset'])) {
    $email = $_POST["email"];
    $new = $_POST["new_pass"];
    $confirm = $_POST["confirm_pass"];

    if ($new === $confirm) {
        $hash = password_hash($new, PASSWORD_DEFAULT);
        $q = mysqli_query($conn, "UPDATE users SET password='$hash' WHERE email='$email'");
        
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Password Updated!'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Email Not Found!');</script>";
        }
    } else {
        echo "<script>alert('Passwords Do Not Match!');</script>";
    }
}
?>
