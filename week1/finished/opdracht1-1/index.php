<?php
if(date('i') === '01') {
    $minuteString = 'minuut';
} else {
    $minuteString = 'minuten';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmeren 2 - Week 1 - Opdracht 1.1</title>
</head>
<body>
<h1>Opdracht 1.1 - Datum en tijd</h1>
<hr/>

<h2>“het is vandaag 1 november 2019”</h2>

<p>
    <?= date('j F Y') ?>
</p>
<h2>“het is vandaag 1/11/2019”</h2>
<p>
    <?php echo date('j/n/Y') ?>
</p>

<h2>“het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”)</h2>
<p>
    Het is nu <?= date('G') ?> uur en <?= date('i') ?> <?= $minuteString ?>
</p>
</body>
</html>













