<?php 
    session_start();

    // Pastikan session kosong
    $_SESSION = [];
    session_unset();

    session_destroy();

    header("Location: login.php");
    exit;
?>