<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form method="post">
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone No" required><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];

    $sql = "INSERT INTO users (name, username, password, email, phone) 
            VALUES ('$name','$username','$password','$email','$phone')";
    if ($conn->query($sql)) {
        echo "✅ Registration successful!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
</body>
</html>
