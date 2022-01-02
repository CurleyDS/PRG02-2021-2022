<?php
/** @var mysqli $db */

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM reservations";
$result = mysqli_query($db, $query) or die ('Error: ' . $query );

//Loop through the result to create a custom array
$reservations = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reservations[] = $row;
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Salsa Dance Reservation Lessons</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>reservations</h1>
<a href="create.php">Add new reservation</a>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Lesson</th>
        <th>Name</th>
        <th>Phone number</th>
        <th>Emailadres</th>
        <th colspan="3"></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="10">&copy; My Reservations</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($reservations as $index => $reservation) { ?>
        <tr>
            <td><?= $index+1 ?></td>
            <td><?= $reservation['lesson_id'] ?></td>
            <td><?= $reservation['name'] ?></td>
            <td><?= $reservation['phone'] ?></td>
            <td><?= $reservation['email'] ?></td>
            <td><a href="details.php?id=<?= $reservation['id'] ?>">Details</a></td>
            <td><a href="edit.php?id=<?= $reservation['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $reservation['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
