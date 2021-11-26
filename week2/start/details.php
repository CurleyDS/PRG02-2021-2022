<?php
require_once 'includes/music-data.php';

$musicAlbum = $musicAlbums[$_GET['index']];
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection - Details [ALBUM]</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section>
    <h1>[<?= $musicAlbum['album'] ?>]</h1>
    <ul>
        <li>Genre: <?= $musicAlbum['genre'] ?></li>
        <li>Year: <?= $musicAlbum['year'] ?></li>
        <li>Tracks: <?= $musicAlbum['tracks'] ?></li>
    </ul>
</section>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
