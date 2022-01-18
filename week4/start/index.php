<?php
require_once 'includes/database.php';

$sql = "SELECT * FROM reservations";
$result = mysqli_query($db, $sql);

$reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);
session_start();
$error = null;
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM albums";
$result = mysqli_query($db, $query) or die ('Error: ' . $query );

//Loop through the result to create a custom array
$musicAlbums = [];
while ($row = mysqli_fetch_assoc($result)) {
    $musicAlbums[] = $row;
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Reservations</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Reservations</h1>
<?= $error == 'Something went wrong canceling your reservation!' ? $error : '' ?>
<a href="create.php">Add new reservation</a>
<table>
    <thead>
    <tr>
        <th></th>
        <th>#</th>
        <th>Lesson</th>
        <th>Name</th>
        <th>Phone number</th>
        <th>Email</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($reservations as $index => $reservation) { ?>
            <tr>
                <td class="image"><img src="" alt=""/></td>
                <td><?= $index+1 ?></td>
                <td><?= $reservation['lesson_id'] ?></td>
                <td><?= $reservation['name'] ?></td>
                <td><?= $reservation['phone'] ?></td>
                <td><?= $reservation['email'] ?></td>
                <td><a href="details.php?id=<?= $reservation['id']; ?>">Details</a></td>
                <td><a href="edit.php?id=<?= $reservation['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $reservation['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="9">&copy; My Reservations</td>
        </tr>
    </tfoot>
</table>
</body>
</html>
