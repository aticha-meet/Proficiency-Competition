<?php
require_once 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body class="bg-dark h-screen text-white justify-content-center align-items-center">
    <div class="bg-primary text-black p-3 w-50 mx-auto mt-5 rounded">
        <?php
        echo "<br>";
        echo "<br>";
        echo "<br>";
        // วนลูปดึงข้อมูลทีละแถวมาแสดงในตาราง
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr class="hello">
                <td><?php echo $row['userId']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <br>
        <?php
        }
        ?>
    </div>
</body>

</html>