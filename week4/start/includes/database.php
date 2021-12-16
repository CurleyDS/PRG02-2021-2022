<?php
$host       = "localhost";
$database   = "booking_system";
$user       = "root";
$password   = "mysql";

$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());

    function redirect($url, $statusCode = 303) {
        /*
         *redirect to location
         */
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    function addTrial(mysqli $db) {
        if (!empty($_POST['lesson']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
            $sql = "INSERT INTO `trials` (lesson_id, name, phone, email) VALUES (" . $_POST['lesson'] . ", '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['email'] . "')";
            $result = mysqli_query($db, $sql);
        } else {
            if (empty($_POST['lesson'])) {
                session_start();
                $_SESSION['message'] = "Lesson invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['name'])) {
                session_start();
                $_SESSION['message'] = "Name invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['phone'])) {
                session_start();
                $_SESSION['message'] = "Phone number invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['email'])) {
                session_start();
                $_SESSION['message'] = "Emailadres invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            session_start();
            $_SESSION['message'] = "Something went wrong!";
            redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
        }
    }

    if ($_GET['function'] == 'addTrial') {
        addTrial($db);
        redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/index.php", false);
    }