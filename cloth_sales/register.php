<?php
include "db.php";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')");
    header("Location: login.php");
}
?>

<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4" style="max-width:450px;">
    <h3>Register</h3>

    <form method="POST">
        <input type="text" name="name" class="form-control mt-2" placeholder="Full Name" required>
        <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
        <input type="password" name="password" class="form-control mt-2" placeholder="Password" required>

        <button class="btn btn-success mt-3" name="register">Register</button>
    </form>
</div>

</body>
</html>
