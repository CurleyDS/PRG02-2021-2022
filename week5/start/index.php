<?php
/** @var mysqli $db */

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM trials";
$result = mysqli_query($db, $query) or die ('Error: ' . $query );

//Loop through the result to create a custom array
$trials = [];
while ($row = mysqli_fetch_assoc($result)) {
    $trials[] = $row;
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Salsa Dance Trial Lessons</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Trials</h1>
<a href="create.php">Add new trial</a>
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
        <td colspan="10">&copy; My Trials</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($trials as $index => $trial) { ?>
        <tr>
            <td><?= $index+1 ?></td>
            <td><?= $trial['lesson_id'] ?></td>
            <td><?= $trial['name'] ?></td>
            <td><?= $trial['phone'] ?></td>
            <td><?= $trial['email'] ?></td>
            <td><a href="details.php?id=<?= $trial['id'] ?>">Details</a></td>
            <td><a href="edit.php?id=<?= $trial['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $trial['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
