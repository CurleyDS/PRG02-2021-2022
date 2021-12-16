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
                $_SESSION['error'] = "Lesson invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['name'])) {
                session_start();
                $_SESSION['error'] = "Name invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['phone'])) {
                session_start();
                $_SESSION['error'] = "Phone number invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            if (empty($_POST['email']) && preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email'])) {
                session_start();
                $_SESSION['error'] = "Emailadres invalid!";
                redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
            }
            session_start();
            $_SESSION['error'] = "Something went wrong!";
            redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/create.php", false);
        }
    }

    function deleteTrial(mysqli $db) {
        if (!empty($_GET['id'])) {
            $sql = "DELETE FROM `trials` WHERE id=" . $_GET['id'];
            $result = mysqli_query($db, $sql);
        } else {
            session_start();
            $_SESSION['error'] = "Something went wrong canceling your trial!";
            redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/index.php", false);
        }
    }

    if ($_GET['function'] == 'addTrial') {
        addTrial($db);
        redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/index.php", false);
    }
    if ($_GET['function'] == 'deleteTrial') {
        deleteTrial($db);
        redirect("http://" . $_SERVER['HTTP_HOST'] . "/PRG02-2021-2022/week4/start/index.php", false);
    }