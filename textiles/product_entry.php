<?php
include "db.php";
session_start();

$type = $_GET['type'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $wear_type = $_POST['wear_type'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$image);

    $sql = "INSERT INTO products(name, contact, wear_type, image) 
            VALUES('$name','$contact','$wear_type','$image')";
    mysqli_query($conn,$sql);

    echo "<script>alert('Product Submitted'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="bg2">

<h2 class="center">Enter Product for <?php echo $type; ?></h2>

<form method="POST" enctype="multipart/form-data">

    <input type="hidden" name="wear_type" value="<?php echo $type; ?>">

    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="text" name="contact" placeholder="Contact Number" required><br>

    <label>Upload Image:</label><br>
    <input type="file" name="image" required><br><br>

    <button type="submit" name="submit">Submit</button>

</form>

</body>
</html>