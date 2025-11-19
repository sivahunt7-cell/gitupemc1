<?php
include "db.php";

$error = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($q);

    if($user){
        if($user['password'] == $pass){
            header("Location: index.php");
        } else {
            $error = "❌ Wrong Password";
        }
    } else {
        $error = "❌ Email Not Found";
    }
}
?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4" style="max-width:450px;">
    <h3>Login</h3>

    <form method="POST">
        <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mt-2" placeholder="Password" required>

        <?php if($error!=""){ ?>
        <p class="text-danger"><?php echo $error; ?></p>
        <?php } ?>

        <button class="btn btn-primary mt-3" name="login">Login</button>
        <a href="forgot.php" class="btn btn-link">Forgot Password?</a>
    </form>

    <a href="register.php" class="btn btn-link">Not Registered? Sign Up</a>
</div>

</body>
</html>
