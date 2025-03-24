<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Fatur Rahman",
        "nrp" => "243040094",
        "email" => "phatooor@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fadhlan Muhammad Al-zahid",
        "nrp" => "246010043",
        "email" => "Alannn@gmail.com",
        "jurusan" => "Desain Komunikasi Visual"
    ],
    [
        "nama" => "Nayra Ardyanti",
        "nrp" => "246010044",
        "email" => "nayy@gmail.com",
        "jurusan" => "Desain Komunikasi Visual"
    ],
    [
        "nama" => "Archie Bani Pratama",
        "nrp" => "246010045",
        "email" => "achuakss@gmail.com",
        "jurusan" => "Desain Komunikasi Visual"
    ],
    [
        "nama" => "Ghrisvy Tausyah",
        "nrp" => "243040091",
        "email" => "wibugris@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Stephen Curry",
        "nrp" => "245002040",
        "email" => "Cheffcurry@gmail.com",
        "jurusan" => "PJKR"
    ],
    [
        "nama" => "Yanto Alhadi",
        "nrp" => "243040095",
        "email" => "yanto45@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Bagas Kara",
        "nrp" => "248040098",
        "email" => "bagass@gmail.com",
        "jurusan" => "Kedokteran"
    ],
    [
        "nama" => "Titan Ristina",
        "nrp" => "248040060",
        "email" => "ristina@gmail.com",
        "jurusan" => "Kedokteran"
    ],
    [
        "nama" => "Ikmal Ijlal Syahid",
        "nrp" => "246040001",
        "email" => "ikmull@gmail.com",
        "jurusan" => "Teknik Sipil"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>