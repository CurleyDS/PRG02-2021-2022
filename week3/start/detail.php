<?php
require_once 'includes/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM trials WHERE id = '$id'";
$result = mysqli_query($db, $sql);

$trial = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Lesson: [<?= $trial['lesson_id'] ?>]</h1>
        <ul>
            <li>Name: <?= $trial['name'] ?></li>
            <li>Phone: <?= $trial['phone'] ?></li>
            <li>Email: <?= $trial['email'] ?></li>
        </ul>
    </section>
    <div>
        <a href="index.php">Go back to the list</a>
    </div>
</body>
</html>











