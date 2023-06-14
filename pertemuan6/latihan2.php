<?php
    // $students = [["Momoka", "22/502634/PA/21583", 
    //             "Ilmu Komputer", "momoka@mail.ui.ac.id"],
    //             ["Yui", "22/502363/PA/21642", 
    //             "Ilmu Musik", "yui@mail.ui.ac.id"]
    // ];

    // Array Associative
    // definisinya sama seperti array numeri, kecuali
    // key-nya adalah string yang kita buat sendiri
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

    <?php foreach($students as $student): ?>
        <ul>
            <li>
                <img src="img/<?= $student["foto"] ?>">
            </li>
            <li>Nama: <?= $student["nama"]; ?></li>
            <li>NIM: <?= $student["nim"]; ?></li>
            <li>Jurusan: <?= $student["jurusan"]; ?></li>
            <li>Email: <?= $student["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>