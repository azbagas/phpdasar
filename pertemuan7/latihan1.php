<?php 
    // // Variable scope / lingkup variabel
    // $x = 10;

    // function tampilX() {
    //     global $x; 
    //     // Variabel yang di dalem fungsi sejatinya 
    //     //hanya bisa diakses untuk fungsi itu sendiri
    //     echo $x;
    // }

    // tampilX();


    // SUPERGLOBALS
    // variable global milik PHP
    // merupakan Array Associative
    // $_GET
    // $_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV


    // $_GET
    // var_dump($_GET);

    $students = [
        [
            "nama" => "Tsumugi Kotobuki", 
            "nim" => "22/502634/PA/21583", 
            "jurusan" => "Ilmu Komputer", 
            "email" => "mugi@ui.ac.id",
            "foto" => "mugi.jpg"
        ],
        [
            "nama" => "Mashiro Shiina", 
            "nim" => "22/502363/PA/21642", 
            "jurusan" => "Ilmu Musik", 
            "email" => "shiina@mail.ui.ac.id",
            "foto" => "shiina.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($students as $student) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $student["nama"]; ?>&nim=<?= $student["nim"]; ?>&jurusan=
                <?= $student["jurusan"]; ?>&email=<?= $student["email"]; ?>&foto=<?= $student["foto"]; ?>">
                <?= $student["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>