<?php 
    session_start();

    // Pastikan session kosong
    $_SESSION = [];
    session_unset();

    session_destroy();

    // Hapus cookie
    // Dibuat expire-nya di waktu yg sudah lewat
    setcookie("id", "", time() - 3600);
    setcookie("key", "", time() - 3600);

    header("Location: login.php");
    exit;
?>