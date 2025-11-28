<?php include "db.php"; ?>

<?php
session_start();

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)==1){
        $_SESSION['user'] = $u;
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="bg">

<h2 class="center">Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="login">Login</button>
</form>

</body>
</html>
