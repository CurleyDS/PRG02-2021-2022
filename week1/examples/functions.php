<?php
/*
 * a function must be declared with the word 'function'
 * a function can be declared anywhere you like
 * a function can have parameters
 * a function ca return a result
 */

/**
 * This method makes half a Christmas tree (upside down) with the provided characters
 * @param $firstName
 * @param $lastName
 * @return string
 */
function getFullName($firstName, $lastName)
{
    return $firstName . ' ' . $lastName;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Functions</title>
</head>
<body>
<section>
    <p>
        <?= 'Hi ' . getFullName('Antwan', 'van der Mooren'); ?>
    </p>
</section>
</body>
</html>
