<?php 
    // Koneksi ke database
    // (nama_host, username_mysql, password, database)
    // conn: connection
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Ambil data dari tabel mahasiswa / query data mahasiswa
    // $result: lemari, kita butuh baju (data) di dalamnya
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // Kalo salah kasih pesan error karena dia gak ngasih pesan error scr otomatis
    // if (!$result) {
    //     echo mysqli_error($conn);
    // }

    // ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan numerik dan associative
    // mysqli_fetch_object()

    // while ($students = mysqli_fetch_assoc($result)) {
    //     var_dump($students[0]);
    // }
    
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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="">ubah</a> |
                        <a href="">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>