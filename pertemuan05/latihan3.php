<?php
    // array numerik: array yang index-nya angka
    $students = [["Momoka", "22/502634/PA/21583", 
                "Ilmu Komputer", "momoka@mail.ui.ac.id"],
                ["Yui", "22/502363/PA/21642", 
                "Ilmu Musik", "yui@mail.ui.ac.id"]
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
            <li>Nama: <?= $student[0]; ?></li>
            <li>NIM: <?= $student[1]; ?></li>
            <li>Jurusan: <?= $student[2]; ?></li>
            <li>Email: <?= $student[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>