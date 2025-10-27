<!DOCTYPE html>
<html>
<head>
    <title>Reverse an Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav><a href="index.php">Home</a></nav>

    <h2>Reverse an Array</h2>

    <form method="post">
        Enter numbers separated by commas: <input type="text" name="numbers" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $arr = explode(',', $_POST['numbers']);
        $arr = array_map('trim', $arr);
        echo "<h3>Reversed Array:</h3>";
        echo implode(', ', array_reverse($arr));
    }
    ?>
</body>
</html>
