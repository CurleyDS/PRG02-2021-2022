<?php
/** @var mysqli $db */

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT *, albums.name as album_name, artists.name as artist_name 
          FROM albums
          INNER JOIN artists ON albums.artist_id = artists.id";
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
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="10">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($musicAlbums as $musicAlbum) { ?>
        <tr>
            <td><?= $musicAlbum['id'] ?></td>
            <td><?= $musicAlbum['artist_name'] ?></td>
            <td><?= $musicAlbum['album_name'] ?></td>
            <td><?= $musicAlbum['genre'] ?></td>
            <td><?= $musicAlbum['year'] ?></td>
            <td><?= $musicAlbum['tracks'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
