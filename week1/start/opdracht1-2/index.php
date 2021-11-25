<?php
$dayTime = null;

if(date("H") < 12){
 
    $dayTime = "morning";

  }elseif(date("H") > 11 && date("H") < 18){

    $dayTime = "afternoon";

  }elseif(date("H") > 17){

    $dayTime = "evening";

  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmeren 2 - Week 1 - Opdracht 1.2</title>
</head>
<body>
<h1>Opdracht 1.2</h1>
<hr/>

<h2>Good <?php echo $dayTime; ?></h2>
<p>

</p>
</body>
</html>
