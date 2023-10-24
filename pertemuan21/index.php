<?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    require 'functions.php'; // Hubungin file

    // $students = query("SELECT * FROM mahasiswa ORDER BY id DESC");
    $students = query("SELECT * FROM mahasiswa");
    
    // Kalo nyari
    if (isset($_GET["keyword"])) {
        $students = cari($_GET["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 20px;
            display: none;
        }

        .search {
            display: flex;
            width: 400px;
            justify-content: space-between;
        }

        @media print {
            .logout, .tambah, .search, .aksi {
                display: none;
            }
        }
    </style>
</head>
<body>
    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
    <br><br>

    <!-- Pencarian -->
    <form action="" method="get" class="search">
        <div>
            <input type="text" name="keyword" size="40" <?= !isset($_GET["keyword"]) ? "autofocus" : "" ?>
                placeholder="keyword pencarian..." autocomplete="off" 
                id="keyword"
                value=<?= isset($_GET["keyword"]) ? $_GET["keyword"] : "" ?>
            >
            <button type="submit" id="tombol-pencarian">Cari!</button>
            <a href="index.php">Reset</a>
        </div>
        <img src="img/loader.gif" class="loader" alt="loading">
    </form>
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th class="aksi">Aksi</th>
                    <th>Gambar</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td class="aksi">
                            <a href="ubah.php?id=<?= $student["id"]; ?>">ubah</a> |
                            <a href="hapus.php?id=<?= $student["id"]; ?>" 
                                onclick="return confirm('Yakin ingin menghapus <?= $student["nama"]; ?>?');">
                                hapus
                            </a>
                        </td>
                        <td><img src="img/<?= $student["gambar"]; ?>" width="50"></td>
                        <td><?= $student["nim"]; ?></td>
                        <td><?= $student["nama"]; ?></td>
                        <td><?= $student["email"]; ?></td>
                        <td><?= $student["jurusan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>