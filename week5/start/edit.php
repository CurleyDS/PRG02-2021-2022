<?php
/** @var mysqli $db */

//Require music data & image helpers to use variable in this file
require_once "includes/database.php";
require_once "includes/image-helpers.php";

//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $id = mysqli_escape_string($db, $_POST['id']);
    $lesson_id = mysqli_escape_string($db, $_POST['lesson_id']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $phone = mysqli_escape_string($db, $_POST['phone']);
    $email = mysqli_escape_string($db, $_POST['email']);

    //Require the form validation handling
    require_once "includes/form-validation.php";

    //Special check for add form only
    // if ($_FILES['image']['error'] == 4) {
    //     $errors['image'] = 'Image cannot be empty';
    // }
    
    if (empty($errors)) {
        //Store image & retrieve name for database saving
        // $image = addImageFile($_FILES['image']);
        
        //Save the record to the database
        $query = "UPDATE trials
                  SET lesson_id='$lesson_id', name='$name', phone='$phone', email='$email'
                  WHERE id=$id";
        $result = mysqli_query($db, $query) or die('Error: '.mysqli_error($db). ' with query ' . $query);

        if ($result) {
            header('Location: index.php');
            exit;
        } else {
            $errors['db'] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
} else if (isset($_GET['id']) || $_GET['id'] != '') {
    //Retrieve the GET parameter from the 'Super global'
    $trialId = mysqli_escape_string($db, $_GET['id']);

    //Get the record from the database result
    $query = "SELECT * FROM trials WHERE id = '$trialId'";
    $result = mysqli_query($db, $query) or die ('Error: ' . $query);

    if (mysqli_num_rows($result) == 1) {
        $trial = mysqli_fetch_assoc($result);
    } else {
        // redirect when db returns no result
        header('Location: index.php');
        exit;
    }
} else {
    // Id was not present in the url OR the form was not submitted

    // redirect to index.php
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Salsa Dance Trial Edit</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Edit</h1>
<?php if (isset($errors['db'])) { ?>
    <div><span class="errors"><?= $errors['db']; ?></span></div>
<?php } ?>

<!-- enctype="multipart/form-data" no characters will be converted -->
<form action="" method="post" enctype="multipart/form-data">
<div class="data-field">
        <label for="lesson_id">Lesson</label>
        <input id="lesson_id" type="number" name="lesson_id" value="<?= isset($lesson_id) ? htmlentities($lesson_id) : $trial['lesson_id'] ?>" min="1"/>
        <span class="errors"><?= $errors['lesson_id'] ?? '' ?></span>
    </div>
    <div class="data-field">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="<?= isset($name) ? htmlentities($name) : $trial['name'] ?>"/>
        <span class="errors"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="phone">Phone number</label>
        <input id="phone" type="text" name="phone" value="<?= isset($phone) ? htmlentities($phone) : $trial['phone'] ?>"/>
        <span class="errors"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
    </div>
    <div class="data-field">
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="<?= isset($email) ? htmlentities($email) : $trial['email'] ?>"/>
        <span class="errors"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
    </div>
    <!-- <div class="data-field">
        <label for="image">Image</label>
        <input type="file" name="image" id="image"/>
        <span class="errors"><?= isset($errors['image']) ? $errors['image'] : '' ?></span>
    </div> -->
    <div class="data-submit">
        <input type="hidden" name="id" value="<?= $trial['id'] ?>"/>
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
