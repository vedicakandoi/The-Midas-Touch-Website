<?php
    session_start();
    unset($_SESSION['currentUsername']);
    unset($_SESSION["currentPassword"]);
    unset($_SESSION["currentEmail"]);
    unset($_SESSION["currentName"]);
    header('location:account.php');
?>