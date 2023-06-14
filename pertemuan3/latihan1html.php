<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <h1>Test Table</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        
        <!-- <?php 
            for ($i=0; $i < 5; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 4; $j++) { 
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?> -->

        <!-- Template -->
        <!-- <?php for ($i=0; $i < 5; $i++) { ?>
            <tr>
                <?php for ($j=0; $j < 4; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?> -->

        <!-- Kurung kurawa diganti / Pisahin yang harusnya PHP PHP, HTML HTML -->
        <?php for ($i=0; $i < 5; $i++) : ?>
            <?php if ($i % 2 != 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($j=0; $j < 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
    </table>
</body>
</html>