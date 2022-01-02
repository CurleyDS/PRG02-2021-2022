<?php
    session_start();
    $error = null;
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <h1>Add reservation</h1>

    <form action="index.php?function=addReservation" method="post">
        <div>
            <label for="lesson">Lesson:</label>
            <input id="lesson" type="number" name="lesson" min="1" required/>
            <span><?= $error == 'Lesson invalid!' ? $error : '' ?></span>
        </div>
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" value="" required/>
            <span><?= $error == 'Name invalid!' ? $error : '' ?></span>
        </div>
        <div>
            <label for="phone">Phone number</label>
            <input id="phone" type="text" name="phone" value="" required/>
            <span><?= $error == 'Phone number invalid!' ? $error : '' ?></span>
        </div>
        <div>
            <label for="email">Emailadres</label>
            <input id="email" type="email" name="email" value="" required/>
            <span><?= $error == 'Emailadres invalid!' ? $error : '' ?></span>
        </div>
        <div>
            <input type="submit" name="submit" value="Save"/>
        </div>
    </form>
    <div>
        <a href="index.php">Go back to the list</a>
    </div>
</body>
</html>
