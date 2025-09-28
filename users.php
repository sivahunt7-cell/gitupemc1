<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Users View</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background-color: #555; color: white; }
    </style>
</head>
<body>
<h2>Registered Users</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php
    $sql = "SELECT id, username, password FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['password']."</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    ?>
</table>
</body>
</html>
