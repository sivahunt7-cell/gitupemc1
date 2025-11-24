<?php
session_start();
$type = $_GET['type'];

if(!isset($_SESSION['username'])){
    echo "<script>alert('Please Login or Register First'); window.location='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Product Details</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2><?php echo ucfirst($type); ?> Details</h2>

<p>High-quality men's <?php echo $type; ?> available.</p>

<form method="post">
    <button name="complete" class="btn">Complete</button>
</form>

<a href="index.php" class="back-btn">Back</a>

<?php
if(isset($_POST['complete'])){
    include "db.php";
    $u = $_SESSION['username'];

    mysqli_query($connect, "INSERT INTO session_records(username, wear_type) VALUES('$u', '$type')");

    echo "<script>alert('Order Completed'); window.location='session_table.php';</script>";
}
?>

</body>
</html>
