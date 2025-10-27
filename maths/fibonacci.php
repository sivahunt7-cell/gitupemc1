<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
    </nav>

    <h2>Fibonacci Series using Recursion</h2>

    <form method="post">
        Enter number of terms: <input type="number" name="n" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    function fibonacci($n) {
        if ($n == 0) return 0;
        else if ($n == 1) return 1;
        else return fibonacci($n - 1) + fibonacci($n - 2);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = $_POST['n'];
        echo "<h3>Fibonacci Series:</h3>";
        for ($i = 0; $i < $n; $i++) {
            echo fibonacci($i) . " ";
        }
    }
    ?>
</body>
</html>
