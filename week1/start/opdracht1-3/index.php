<?php
//Multi dimensional array with the music collection data
$musicAlbums =
    [
        // fill the collection with albums (also arrays)
        [
            "artist" => "Fleetwood Mac",
            "album" => "Rumours",
            "release_date" => "4-2-1977",
            "tracks" => 11,
            "genre" => "Rock"
        ],
        [
            "artist" => "Hootie And The Blowfish",
            "album" => "Cracked Rear View",
            "release_date" => "5-7-1994",
            "tracks" => 12,
            "genre" => "Rock"
        ],
        [
            "artist" => "Garth Brooks",
            "album" => "Double Live",
            "release_date" => "2-11-2007",
            "tracks" => 2,
            "genre" => "Country"
        ],
        [
            "artist" => "AC/DC",
            "album" => "Back In Black",
            "release_date" => "25-7-1980",
            "tracks" => 10,
            "genre" => "Hard Rock"
        ],
        [
            "artist" => "Pink Floyd",
            "album" => "The Wall",
            "release_date" => "30-11-1979",
            "tracks" => 26,
            "genre" => "Progressive Rock"
        ],
        [
            "artist" => "Led Zeppelin",
            "album" => "Led Zeppelin IV (Remaster)",
            "release_date" => "8-11-1971",
            "tracks" => 8,
            "genre" => "Heavy Metal"
        ],
        [
            "artist" => "Billy Joel",
            "album" => "Greatest Hits Volume 1 & Volume 2",
            "release_date" => "7-12-2006",
            "tracks" => 26,
            "genre" => "Rock"
        ],
        [
            "artist" => "Eagles",
            "album" => "Hotel California",
            "release_date" => "8-12-1976",
            "tracks" => 9,
            "genre" => "Blues"
        ],
        [
            "artist" => "Michael Jackson",
            "album" => "Thriller",
            "release_date" => "30-11-1982",
            "tracks" => 9,
            "genre" => "Disco"
        ],
        [
            "artist" => "LP",
            "album" => "Their Greatest Hits 1971-1975",
            "release_date" => "29-11-2006",
            "tracks" => 10,
            "genre" => "Rock"
        ]
    ];
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
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <!--        Loop through all albums in the collection-->
    <?php foreach ($musicAlbums as $key => $musicAlbum) { ?>
        <tr>
            <td><?= $key +1 ?></td>
            <td><?= $musicAlbum['artist'] ?></td>
            <td><?= $musicAlbum['album'] ?></td>
            <td><?= $musicAlbum['genre'] ?></td>
            <td><?= $musicAlbum['release_date'] ?></td>
            <td><?= $musicAlbum['tracks'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
