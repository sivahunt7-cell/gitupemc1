<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Wear Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        .nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .category-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s;
            cursor: pointer;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
        }
        
        .category-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .category-info {
            padding: 20px;
        }
        
        .category-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Men's Wear Shop</div>
            <div class="nav">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php">Dashboard</a>
                    <a href="products.php">View Products</a>
                    <a href="add_product.php">Sell Product</a>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
        
        <h1 style="color: white; text-align: center;">Shop by Category</h1>
        
        <div class="categories">
            <div class="category-card" onclick="window.location.href='category.php?type=formal'">
                <img src="https://i.ytimg.com/vi/U6Ys1zTCp68/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLD16O_uy0z9HWMBSvukcFgmVfXsTQ" alt="Formal Wear" class="category-image">
                <div class="category-info">
                    <div class="category-name">Formal Wear</div>
                    <button class="btn">Browse Products</button>
                </div>
            </div>
            
            <div class="category-card" onclick="window.location.href='category.php?type=casual'">
                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=400&h=200&fit=crop" alt="Casual Wear" class="category-image">
                <div class="category-info">
                    <div class="category-name">Casual Wear</div>
                    <button class="btn">Browse Products</button>
                </div>
            </div>
            
            <div class="category-card" onclick="window.location.href='category.php?type=sports'">
                <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=200&fit=crop" alt="Sports Wear" class="category-image">
                <div class="category-info">
                    <div class="category-name">Sports Wear</div>
                    <button class="btn">Browse Products</button>
                </div>
            </div>
            
            <div class="category-card" onclick="window.location.href='category.php?type=traditional'">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=400&h=200&fit=crop" alt="Traditional Wear" class="category-image">
                <div class="category-info">
                    <div class="category-name">Traditional Wear</div>
                    <button class="btn">Browse Products</button>
                </div>
            </div>
            
            <div class="category-card" onclick="window.location.href='category.php?type=accessories'">
                <img src="data:image/jpeg;base64,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" alt="Accessories" class="category-image">
                <div class="category-info">
                    <div class="category-name">Accessories</div>
                    <button class="btn">Browse Products</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>