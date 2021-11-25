<?php

if ($_POST['user_pwd'] == "password") {

    session_start();
    $_SESSION['userLogin'] = $_POST['user_login'];
    header('Location:index.php');
} else {
    header('Location:connect.php');
}
