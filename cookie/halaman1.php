<?php 
    // Membuat cookie dengan expire selama 1 menit
    setcookie('nama', 'Narumi Momose', time()+60);

    /* Apa perbedaan antara cookie dan session?
    Session disimpan di server side
    Cookie disimpan di client side (browse pengguna) 
    Cookie bisa diatur juga lama expirenya
    */
?>