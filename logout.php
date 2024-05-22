<?php
    session_start();
    session_destroy();
    $_SESSION = array();
    $_SESSION['error_message'] = "Logout Effettuato!";
    header("Location: index.php");

    exit();
?>
