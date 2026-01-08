<?php
require_once 'db.php';

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$category = $_GET['type'] ?? 'formal';

$stmt = $pdo->prepare("SELECT p.*, u.username FROM products p 
                      JOIN users u ON p.seller_id = u.id 
                      WHERE p.category = ?");
$stmt->execute([$category]);
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($category); ?> - Men's Wear Shop</title>
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
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
            padding: 20px;
            background: white;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .product-price {
            color: #667eea;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .seller-info {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
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
            <h1><?php echo ucfirst($category); ?> Products</h1>
            <a href="index.php" class="btn">Back to Home</a>
        </div>
        
        <div class="products-grid">
            <?php foreach($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                    <div class="product-info">
                        <div class="product-name"><?php echo $product['name']; ?></div>
                        <div class="product-price">$<?php echo $product['price']; ?></div>
                        <div class="seller-info">Seller: <?php echo $product['username']; ?></div>
                        <div class="product-description"><?php echo substr($product['description'], 0, 100); ?>...</div>
                        <a href="buyer_page.php?id=<?php echo $product['id']; ?>" class="btn">Buy Now</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>