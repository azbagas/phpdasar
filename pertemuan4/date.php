<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp/EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d F Y", time() + (60*60*24*100)); // Nampilin waktu 100 hari dari sekarang
    
    // mktime
    // membuat sendiri detik
    // mktime(0, 0, 0, 5, 27, 2003) return detik yg sudah berlalu 
    // dari 1 Januari 1970 sampai 27 Mei 2003
    // echo date("l, d F Y", mktime(0, 0, 0, 5, 27, 2003));

    // strtotime // kebalikan dari mktime
    echo date("l", strtotime("27 may 2003"))
?>