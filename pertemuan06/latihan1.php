<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            transition: 1s;
            float: left;
            margin: 10px;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: red;
        }
    </style>
</head>
<body>
    <?php for ($i=0; $i < 10; $i++) : ?>
        <div class="kotak"><?= $i ?></div>
    <?php endfor; ?>
</body>
</html>