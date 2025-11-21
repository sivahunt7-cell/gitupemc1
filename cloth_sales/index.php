<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>

    <title>Cloth Sales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">Saree Textiles</a>
    <a href="login.php" class="btn btn-light">Login</a>
  </div>
</nav>

<!-- CAROUSEL -->
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sik.jpg" class="d-block w-100" style="height:400px; object-fit:cover;">
    </div>
    <div class="carousel-item">
      <img src="images/jean.jpg" class="d-block w-100" style="height:400px; object-fit:cover;">
    </div>
    <div class="carousel-item">
      <img src="images/designer.jpg" class="d-block w-100" style="height:400px; object-fit:cover;">
    </div>
  </div>
</div>

<div class="container mt-4">
    <h3 class="text-center">Available Sarees</h3>
    <div class="row">

        <?php 
        $sarees = mysqli_query($conn, "SELECT * FROM sarees");
        while($r = mysqli_fetch_assoc($sarees)){ ?>

        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="images/<?php echo $r['image']; ?>" class="card-img-top" style="height:250px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5><?php echo $r['name']; ?></h5>
                    <a href="product.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>
</center>

</body>
</html>
