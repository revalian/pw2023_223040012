<?php
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐄'];
$makanan = ['🍇', '🍔', '🍣', '🍙', '🍩'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebun Binatang</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php }  ?>
    </ul>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($a = 0; $a < 5; $a++) { ?>
            <li><?= $makanan[$a]; ?></li>
        <?php }  ?>
    </ul>

    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach ($binatang as $ali) { ?>
            <li><?= $ali ?></li>
        <?php } ?>
    </ol>
    <hr>

    <h2>Daftar Makanan</h2>
    <ol>
        <?php foreach ($makanan as $lian) { ?>
            <li><?= $lian ?></li>
        <?php } ?>
    </ol>
</body>

</html>