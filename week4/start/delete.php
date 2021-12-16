<?php
//TODO: create delete logic
require_once "includes/database.php";

$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <title>Delete Trial</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Are you sure you want to cancel this trial?</h1>

<div>
    <a href="index.php?function=deleteTrial&id=<?= $id ?>"><h2>Yes</h2></a>
    <br>
    <a href="index.php"><h2>No</h2></a>
</div>
</body>
</html>

