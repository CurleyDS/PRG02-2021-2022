<?php
    $date = new DateTime();
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

<h2>“het is vandaag <?php echo date_format($date, 'j F Y'); ?>”</h2>
<p>

</p>

<h2>“het is vandaag <?php echo date_format($date, 'j/m/Y'); ?>”</h2>
<p>

</p>

<h2>“het is nu <?php echo date_format($date, 'H') . " uur en " . date_format($date, 'i') . (date_format($date, 'i') == "1" ? " minuut" : " minuten"); ?>”</h2>
<p>

</p>
</body>
</html>
