<?php
// koneksi ke db

$conn = mysqli_connect(
    'localhost', 'root', '', 'pw2024_243040094'
);

// query kr tabel mahasiswa

$result = mysqli_query(
    $conn, "SELECT * FROM mahasiswa"
);

// tampung data ke dalam array

$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}

// simpan ke variabel mahasiswa

$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <?php foreach($mahasiswa as $mhs) : ?>
    
    <tr>
      <td>1</td>
      <td> <?= $mhs['nama']; ?> </td>
      <td> <?= $mhs['nim']; ?> </td>
      <td> <?= $mhs['email']; ?> </td>
      <td> <?= $mhs['jurusan']; ?> </td>
      <td>
        <img src="img/anonim.png" width="50">
      </td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>

    <?php endforeach; ?>
  
    </table>
</body>

</html>