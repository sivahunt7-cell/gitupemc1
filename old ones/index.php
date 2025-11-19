<?php include('db2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="nav-center">
            <h2>🍦 Cool Creams</h2>
        </div>
        <div class="nav-right">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </nav>

    <div class="container">
        <img src="images/icecream.jpg" alt="Ice Cream" class="main-img">
        <h3>Available Flavors</h3>
        <ul>
            <li>Vanilla</li>
            <li>Chocolate</li>
            <li>Strawberry</li>
            <li>Mango</li>
            <li>Pistachio</li>
        </ul>
    </div>
</body>
</html>
