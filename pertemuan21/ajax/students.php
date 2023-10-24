<?php 
    require '../functions.php';

    $students = cari($_GET["keyword"]);
?>

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
                <td><?= $i ?></td>
                <td>
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