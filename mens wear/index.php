<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Men's Wear Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Men’s Wear Store</h2>

<div class="container">
    <a href="product.php?type=shirt"><img src="assets/shirt.jpg" class="item"> <p>Shirt</p></a>
    <a href="product.php?type=tshirt"><img src="assets/tshirt.jpg" class="item"> <p>T-Shirt</p></a>
    <a href="product.php?type=pants"><img src="assets/pants.jpg" class="item"> <p>Pants</p></a>
</div>

<a href="login.php" class="btn">Login</a>
<a href="register.php" class="btn">Register</a>

</body>
</html>
