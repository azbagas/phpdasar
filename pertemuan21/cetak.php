<?php

    require_once __DIR__ . '/vendor/autoload.php';

    require 'functions.php';

    $students = query("SELECT * FROM mahasiswa");

    $mpdf = new \Mpdf\Mpdf();
    
    // Konsepnya menggabungkan string

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
        <link rel="stylesheet" href="css/print.css">
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>';

            $i = 1;
            foreach ($students as $student) {
                $html .= '<tr>
                            <td>' . $i++ . '</td>
                            <td><img src = "img/' . $student["gambar"] . '" width="50"></td>
                            <td>' . $student["nim"] . '</td>
                            <td>' . $student["nama"] . '</td>
                            <td>' . $student["email"] . '</td>
                            <td>' . $student["jurusan"] . '</td>
                          </tr>';
            }

            $html .= '</tbody>
            </table>
        </body>
        </html>';
    
    $mpdf->WriteHTML($html);
    $mpdf->Output("daftar-mahasiswa.pdf", \Mpdf\Output\Destination::INLINE);

?>

