<?php
/** @var mysqli $db */

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT al.id, al.name as album_name, ar.name as artist_name, g.name as genre
          FROM albums as al
          INNER JOIN artists ar on al.artist_id = ar.id
          INNER JOIN album_genre ag on al.id = ag.album_id
          INNER JOIN genres g on ag.genre_id = g.id
          INNER JOIN users u on al.user_id = u.id";
$result = mysqli_query($db, $query) or die ('Error: ' . $query );

//Loop through the result to create a custom array
$musicAlbums = [];
while ($row = mysqli_fetch_assoc($result)) {
    if(!isset($musicAlbums[$row['id']])) {
        $musicAlbums[$row['id']] = $row;
        unset($musicAlbums[$row['id']]['genre']);
    }
    $musicAlbums[$row['id']]['genres'][] = $row['genre'];
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
            <td><?= implode(', ', $musicAlbum['genres']) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
