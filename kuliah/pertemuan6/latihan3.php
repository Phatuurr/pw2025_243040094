<?php
$mahasiswa = [
    ['Fatur', '243040094', 'phatooor@gmail,com', 'Teknik Informatika'],
    ['Fadlan', '246010043', 'fadlan@gmail.com', 'DKV', [85, 100, 40]]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang Baru</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama:<?= $m[0]; ?></li>
            <li>NIM:<?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan:<?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>

//Pelajari array asosiatif