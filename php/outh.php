<?php 
    session_start();
    include('connectDB.php');

    if ($_SESSION['logged']) {
        session_destroy();
        $_SESSION['logged'] = false;
        header("location: register.php");
    } else {
        header("location: register.php");
    }
?>