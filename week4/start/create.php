<?php

?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <h1>Create album</h1>

    <form action="" method="post">
        <div>
            <label for="artist">Artist</label>
            <input id="artist" type="text" name="artist" value=""/>
            <span>[Hier komt de eventuele error]</span>
        </div>
        <div>
            <label for="album">Album</label>
            <input id="album" type="text" name="album" value=""/>
            <span>[Hier komt de eventuele error]</span>
        </div>
        <div>
            <label for="genre">Genre</label>
            <input id="genre" type="text" name="genre" value=""/>
            <span>[Hier komt de eventuele error]</span>
        </div>
        <div>
            <label for="year">Year</label>
            <input id="year" type="text" name="year" value=""/>
            <span>[Hier komt de eventuele error]</span>
        </div>
        <div>
            <label for="tracks">Tracks</label>
            <input id="tracks" type="number" name="tracks" value=""/>
            <span>[Hier komt de eventuele error]</span>
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
