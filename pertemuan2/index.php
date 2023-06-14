<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r -> bisa print array
// var_dump -> buat nampilin tipe (debugging lah)

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Momoka";
// echo "Kalo pake petik dua, maka isi variabelnya muncul: $nama"; // Interpolasi

// Operator
// Aritmatika
// + - * / %
// $x = 5;
// $y = 2;
// echo $x * $y;

// penggabung string / concatenation / concat
// . 
// $nama_depan = "Ayunda";
// $nama_belakang = "Risu";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 9;
// echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1"); // true (lihat nilainya saja, tidak tipe datanya)

// identitas
// ===, !==
// var_dump(1 === "1"); // false (tipe datanya juga mesti sama)

// Logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>HI Suramat Pagi <?php echo $nama;?></h1>
    <p>Ini adalah php di dalam <?php echo "HTML";?></p>
    <?php echo "<h1> dan ini adalah penulisan HTML di dalam PHP (not recommended)</h1>"; ?>
</body>
</html>