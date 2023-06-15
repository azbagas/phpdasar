<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- <form action="latihan4.php" method="post">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form> -->

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <!-- Kalo action dikosongin maka perbaruan hanya terjadi di halaman ini -->
    <form action="" method="post">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>