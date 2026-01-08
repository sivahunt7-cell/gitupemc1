<?php
require_once 'db.php';

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$product_id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT p.*, u.username, u.email, u.phone FROM products p 
                      JOIN users u ON p.seller_id = u.id 
                      WHERE p.id = ?");
$stmt->execute([$product_id]);
$product = $stmt->fetch();

if(!$product) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buy <?php echo $product['name']; ?> - Men's Wear Shop</title>
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
        
        .product-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .product-info h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .price {
            font-size: 28px;
            color: #667eea;
            font-weight: bold;
            margin: 20px 0;
        }
        
        .seller-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
            margin-top: 20px;
        }
        
        .btn:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Product Details</h1>
            <a href="index.php" class="btn">Back to Home</a>
        </div>
        
        <div class="product-details">
            <div>
                <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
            </div>
            
            <div class="product-info">
                <h2><?php echo $product['name']; ?></h2>
                <div class="price">$<?php echo $product['price']; ?></div>
                <p><strong>Category:</strong> <?php echo ucfirst($product['category']); ?></p>
                <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                
                <div class="seller-info">
                    <h3>Seller Information</h3>
                    <p><strong>Name:</strong> <?php echo $product['username']; ?></p>
                    <p><strong>Email:</strong> <?php echo $product['email']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $product['phone']; ?></p>
                </div>
                
                <a href="checkout.php?id=<?php echo $product['id']; ?>" class="btn">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</body>
</html>