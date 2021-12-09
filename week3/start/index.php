<?php
require_once 'includes/database.php';

$sql = "SELECT * FROM trials";
$result = mysqli_query($db, $sql);

$trials = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <title>Trials</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Trials</h1>
<a href="index-alternative.php">Check alternative view</a>
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
        <?php foreach ($trials as $index => $trial) { ?>
            <tr>
                <td class="image"><img src="images" alt=""/></td>
                <td><?= $index+1 ?></td>
                <td><?= $trial['lesson_id'] ?></td>
                <td><?= $trial['name'] ?></td>
                <td><?= $trial['phone'] ?></td>
                <td><?= $trial['email'] ?></td>
                <td><a href="detail.php?id=<?= $trial['id'] ?>">Details</a></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="9">&copy; My Collection</td>
        </tr>
    </tfoot>
</table>
</body>
</html>
