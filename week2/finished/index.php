<?php
// import multidimensional array with the music collection data
require_once 'includes/music-data.php';


// reference to $musicAlbums
/** @var array $musicAlbums */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<hr/>
<a href="create.php">New Album</a>
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
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($musicAlbums as $index => $album) {?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $album['artist'] ?></td>
            <td><?= $album['album'] ?></td>
            <td><?= $album['genre'] ?></td>
            <td><?= $album['year'] ?></td>
            <td><?= $album['tracks'] ?></td>
            <td><a href="details.php?index=<?= $index ?>">Details</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
