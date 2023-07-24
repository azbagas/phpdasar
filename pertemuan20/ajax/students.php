<?php 
    require '../functions.php';

    $jumlahDataPerHalaman = 2;
    $jumlahData = jumlahDataCari($_GET["keyword"]);
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $students = cari($_GET["keyword"], $awalData, $jumlahDataPerHalaman);
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
                <td><?= $i + $awalData; ?></td>
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

<!-- Navigasi Page -->
<?php if ($halamanAktif > 1) : ?>
    <a href="?<?= isset($_GET["keyword"]) ? "keyword=".$_GET["keyword"]."&" : "" ?>page=<?= $halamanAktif - 1 ?>">
        &laquo;
    </a>
<?php endif; ?>

<?php for ($i=1; $i <= $jumlahHalaman ; $i++) : ?>
    <?php if ($i == $halamanAktif) : ?>
        <!-- Kalo pindah ke halaman yg sama gak usah ditulis lagi nama halamannya -->
        <a href="?<?= isset($_GET["keyword"]) ? "keyword=".$_GET["keyword"]."&" : "" ?>page=<?= $i; ?>" style="font-weight: bold; color: red;">
            <?= $i; ?>
        </a>
    <?php else : ?>
        <a href="?<?= isset($_GET["keyword"]) ? "keyword=".$_GET["keyword"]."&" : "" ?>page=<?= $i; ?>">
            <?= $i; ?>
        </a>
    <?php endif; ?>
<?php endfor; ?>

<?php if ($halamanAktif < $jumlahHalaman) : ?>
    <a href="?<?= isset($_GET["keyword"]) ? "keyword=".$_GET["keyword"]."&" : "" ?>page=<?= $halamanAktif + 1 ?>">
        &raquo;
    </a>
<?php endif; ?>