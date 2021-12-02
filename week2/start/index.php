<?php
require_once 'includes/music-data.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Music Collection - Week 2</title>
</head>
<body>
<h1>Music Collection</h1>
<a href="create.php">Create</a>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
        <!-- Loop through all albums in the collection -->
        <?php foreach ($musicAlbums as $key => $musicAlbum) { ?>
            <tr>
                <td><?= $key +1 ?></td>
                <td><?= $musicAlbum['artist'] ?></td>
                <td><?= $musicAlbum['album'] ?></td>
                <td><?= $musicAlbum['genre'] ?></td>
                <td><?= $musicAlbum['year'] ?></td>
                <td><?= $musicAlbum['tracks'] ?></td>
                <td><a href="details.php?index=<?= $key ?>">details</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>
