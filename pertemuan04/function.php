<?php 
    date_default_timezone_set("Asia/Jakarta");
    echo date("H:i:sa");
    
    function getSalam($nama = "Admin") {
        $hour = date("H");
        $salam = "";
        if ($hour >= 12 && $hour < 15) {
            $salam = "siang";
        } else if ($hour >= 15 && $hour < 18) {
            $salam = "sore";
        } else if ($hour >= 18 || $hour < 3) {
            $salam = "malam";
        } else { // >= 3 && < 12
            $salam = "pagi";
        }
        return "Selamat $salam, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?= getSalam("Hanaka"); ?></h1>
</body>
</html>