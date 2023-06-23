<?php 
    require 'functions.php'; // Hubungin file
    $students = query("SELECT * FROM mahasiswa");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
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
                    <td><?= $i; ?></td>
                    <td>
                        <a href="">ubah</a> |
                        <a href="">hapus</a>
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
</body>
</html>