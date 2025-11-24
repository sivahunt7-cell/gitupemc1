<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Session Records</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Session Records</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Wear Type</th>
</tr>

<?php
$res = mysqli_query($connect, "SELECT * FROM session_records");

while($row = mysqli_fetch_assoc($res)){
    echo "
    <tr>
        <td>".$row['id']."</td>
        <td>".$row['username']."</td>
        <td>".$row['wear_type']."</td>
    </tr>";
}
?>
</table>

<a href="index.php" class="back-btn">Back</a>

</body>
</html>
