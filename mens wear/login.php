<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Login</h2>

<form method="post">
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <button name="login" class="btn">Login</button>
</form>

<a href="index.php" class="back-btn">Back</a>
<a href="forgot_password.php">Forgot password?</a>

<?php
include "db.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
    
    if(mysqli_num_rows($sql) > 0){
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $data['username'];

        echo "<script>window.location='index.php'</script>";
    } else {
        echo "<div class='error'>Incorrect Password!</div>";
    }
}
?>

</body>
</html>
