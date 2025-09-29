<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Sales - Home</title>
    <style>
        body { margin:0; font-family: Arial, sans-serif; }
        .navbar {
            background:#333; color:white; padding:10px;
            display:flex; justify-content:space-between; align-items:center;
        }
        .navbar .left a, .navbar .right a {
            color:white; text-decoration:none; margin-right:15px;
            font-weight:bold;
        }
        .navbar a:hover { color:#ffcc00; }
        .content { padding:20px; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="left">
            <a href="index.php">Home</a>
            <a href="#">Contact</a>
        </div>
        <div class="right">
            <a href="carregister.php">Register</a>
            <a href="carlogin.php">Login</a>
            <a href="usersview.php">Users View</a>
        </div>
    </div>

    <div class="content">
        <h2>Welcome to Car Sales Website</h2>
        <p>Find the best cars here.</p>
    </div>
</body>
</html>
