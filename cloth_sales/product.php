<?php include "db.php"; 
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM sarees WHERE id=$id");
$data = mysqli_fetch_assoc($q);
?>

<html>
<head>
<title>Saree Details</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card p-3">
        <div class="row">
            <div class="col-md-6">
                <img src="images/<?php echo $data['image']; ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2><?php echo $data['name']; ?></h2>
                <h4>₹ <?php echo $data['price']; ?></h4>
                <p><?php echo $data['description']; ?></p>

                <button class="btn btn-success">Order Now</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
