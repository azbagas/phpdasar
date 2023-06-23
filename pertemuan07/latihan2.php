<?php 
    // cek apakah tidak ada data di $_GET
    // isset: Apakah udah pernah dibuat 
    if (!isset($_GET["nama"]) ||
        !isset($_GET["nim"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["foto"])) {
        // redirect / ditendang
        header("Location: latihan1.php");
        exit; // biar kode di bawahnya tidak dijalankan
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["foto"] ?>">
        </li>
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>NIM: <?= $_GET["nim"]; ?></li>
        <li>Jurusan: <?= $_GET["jurusan"]; ?></li>
        <li>Email: <?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke beranda</a>
</body>
</html>