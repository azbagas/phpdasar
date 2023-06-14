<?php 
    // array
    // variabel yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang dimulai dari 0

    // Membuat array
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");
    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "string", false];

    // Menampilkan array
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // Menampilkan 1 elemen pada array
    // echo $bulan[2];

    // Menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);
?>