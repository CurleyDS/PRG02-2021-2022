<?php
    $genres = [
        [
            "name" => "Rock",
            "value" => "rock"
        ],
        [
            "name" => "Country",
            "value" => "country"
        ],
        [
            "name" => "Hard Rock",
            "value" => "hard_rock"
        ],
        [
            "name" => "Progressive Rock",
            "value" => "progressive_rock"
        ],
        [
            "name" => "Heavy Metal",
            "value" => "heavy_metal"
        ],
        [
            "name" => "Blues",
            "value" => "blues"
        ],
        [
            "name" => "Disco",
            "value" => "disco"
        ]
    ]
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Music Collection - Create new album</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body >
        <section>
            <h1>Create new album</h1>
            <form action="" method="post">
                <label for="artist">Artist:</label>
                <input type="text" id="artist" name="artist"><br><br>
                <label for="album">Album:</label>
                <input type="text" id="album" name="album"><br><br>
                <label for="genre">Genre:</label>
                <select name="genre" id="genre">
                    <option value=""></option>    
                    <!-- Loop through all albums in the collection -->
                    <?php foreach ($genres as $genre) { ?>
                        <option value="<?= $genre['value']; ?>"><?= $genre['name']; ?></option>
                    <?php } ?>
                </select><br><br>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" min="1889" max="<?= date("Y"); ?>" step="1"><br><br>
                <label for="Tracks">Tracks:</label>
                <input type="number" id="Tracks" name="Tracks" min="0"><br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <div>
            <a href="index.php">Go back to the list</a>
        </div>
	</body>
</html>

<script>
    $(function() {
        $( "#datepicker" ).datepicker({dateFormat: 'yy'});
    });​
</script>
