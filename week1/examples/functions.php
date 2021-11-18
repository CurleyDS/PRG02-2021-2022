<?php
/*
 * a function must be declared with the word 'function'
 * a function can be declared anywhere you like
 * $characters is the parameter of this function.
 * In this case, when called, the function is given am array of characters
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
