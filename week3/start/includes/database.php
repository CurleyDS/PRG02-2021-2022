<?php

// General settings
$host       = "localhost";
$database   = "booking_system";
$user       = "root";
$password   = "mysql";

$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());;
