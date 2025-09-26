<?php
include('db.php');
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE id=? AND username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $id, $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Login successful!";
    } else {
        $message = "Invalid ID, username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-left">
        <a href="index.php">Home</a>
    </div>
    <div class="nav-center">
        <h2>🍦 Cool Creams</h2>
    </div>
</nav>

<div class="form-container">
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="id" placeholder="ID" required><br>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
    <p><?php echo $message; ?></p>
</div>
</body>
</html>
