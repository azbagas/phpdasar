<?php 
    require 'functions.php';

    // Ambil data di URL
    $id = $_GET["id"];

    // Query data mahasiswa berdasarkan id
    $student = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // Cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        
        // Cek apakah data berhasil diubah atau tidak
        if (ubah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $student["id"] ?>">
        <!-- Passing gambar pake hidden karena input gambar di bawah gak pake value,
        konsepnya sama kyk id hidden di atas -->
        <input type="hidden" name="gambarLama" value="<?= $student["gambar"] ?>">
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim" required value="<?= $student["nim"] ?>">
                <!-- attribute name itu untuk key di $_POST -->
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= $student["nama"] ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required value="<?= $student["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $student["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label> <br>
                <img src="img/<?= $student['gambar']; ?>" width="50"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali</a>

</body>
</html>