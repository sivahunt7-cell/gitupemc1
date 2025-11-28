<?php include "db.php"; ?>

<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
    mysqli_query($conn, $sql);

    echo "<script>alert('Registered Successfully'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="bg">

<h2 class="center">Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register">Register</button>
</form>

</body>
</html>
