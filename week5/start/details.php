<?php
/** @var mysqli $db */

// redirect when uri does not contain a id
if(!isset($_GET['id']) || $_GET['id'] == '') {
    // redirect to index.php
    header('Location: index.php');
    exit;
}

//Require database in this file
require_once "includes/database.php";

//Retrieve the GET parameter from the 'Super global'
$reservationId = mysqli_escape_string($db, $_GET['id']);

//Get the record from the database result
$query = "SELECT * FROM reservations WHERE id = '$reservationId'";
$result = mysqli_query($db, $query)
    or die ('Error: ' . $query );

if(mysqli_num_rows($result) != 1)
{
    // redirect when db returns no result
    header('Location: index.php');
    exit;
}

$reservation = mysqli_fetch_assoc($result);

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Salsa Dance reservation Details</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1><?= $reservation['lesson_id'] . ' - ' . $reservation['name'] ?></h1>

<div>
    <img src="images/" alt=""/>
</div>
<ul>
    <li>Phone number:  <?= $reservation['phone'] ?></li>
    <li>Emailadres:   <?= $reservation['email'] ?></li>
</ul>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
