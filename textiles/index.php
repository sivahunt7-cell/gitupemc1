<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Men's Wear Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

<h1 class="center">Men's Wear Categories</h1>

<div class="container">
    <a href="product_entry.php?type=Shirts">
        <div class="card">
            <img src="images/shirt.jpg">
            <p>Shirts</p>
        </div>
    </a>

    <a href="product_entry.php?type=Pants">
        <div class="card">
            <img src="images/pants.jpg">
            <p>Pants</p>
        </div>
    </a>

    <a href="product_entry.php?type=T-Shirts">
        <div class="card">
            <img src="images/tshirt.jpg">
            <p>T-Shirts</p>
        </div>
    </a>

    <a href="product_entry.php?type=Jackets">
        <div class="card">
            <img src="images/jacket.jpg">
            <p>Jackets</p>
        </div>
    </a>

    <a href="product_entry.php?type=Shoes">
        <div class="card">
            <img src="images/shoes.jpg">
            <p>Shoes</p>
        </div>
    </a>
</div>

</body>
</html>
