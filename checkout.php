<?php
require_once 'db.php';

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$product_id = $_GET['id'] ?? 0;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $quantity = $_POST['quantity'];
    $buyer_id = $_SESSION['user_id'];
    
    // Get seller_id from product
    $stmt = $pdo->prepare("SELECT seller_id FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();
    $seller_id = $product['seller_id'];
    
    // Create order
    $stmt = $pdo->prepare("INSERT INTO orders (product_id, buyer_id, seller_id, quantity, address, city, state, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$product_id, $buyer_id, $seller_id, $quantity, $address, $city, $state, $zip_code]);
    
    header('Location: dashboard.php?success=order_placed');
    exit();
}

// Get product details
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$product_id]);
$product = $stmt->fetch();

if(!$product) {