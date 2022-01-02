<?php
//Require database in this file
require_once "includes/database.php";

$id = $_GET['id'];
$sql = "SELECT * FROM reservations WHERE id = '$id'";
$result = mysqli_query($db, $sql);

$reservation = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Reservation Details</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1><?= $reservation['lesson_id']; ?></h1>

<div>
    <img src="" alt=""/>
</div>
<ul>
    <li>Name: <?= $reservation['name']; ?></li>
    <li>Phone number: <?= $reservation['phone']; ?></li>
    <li>Emailadres: <?= $reservation['email']; ?></li>
</ul>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
