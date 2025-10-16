<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Reset Password</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter your Email" required><br>
        <input type="password" name="new_pass" placeholder="New Password" required><br>
        <input type="password" name="confirm_pass" placeholder="Re-enter New Password" required><br>
        <button type="submit" name="reset">Update Password</button>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['reset'])) {
    $email = $_POST['email'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($new_pass === $confirm_pass) {
        $hashed = password_hash($new_pass, PASSWORD_DEFAULT);
        $update = mysqli_query($conn, "UPDATE users SET password='$hashed' WHERE email='$email'");
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Password Updated Successfully!'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Email not found!');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match!');</script>";
    }
}
?>
