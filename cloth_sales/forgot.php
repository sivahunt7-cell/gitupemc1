<?php 
include "db.php";

$msg = "";

if(isset($_POST['reset'])){
    $email = $_POST['email'];
    $new = $_POST['newpass'];

    mysqli_query($conn, "UPDATE users SET password='$new' WHERE email='$email'");
    $msg = "Password Updated!";
}
?>

<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-4" style="max-width:450px;">
    <h3>Forgot Password</h3>

    <form method="POST">
        <input type="email" name="email" class="form-control mt-2" placeholder="Enter email" required>
        <input type="password" name="newpass" class="form-control mt-2" placeholder="New password" required>

        <?php if($msg!=""){ ?>
        <p class="text-success mt-2"><?php echo $msg; ?></p>
        <?php } ?>

        <button class="btn btn-warning mt-3" name="reset">Update Password</button>
    </form>
</div>
</body>
</html>
