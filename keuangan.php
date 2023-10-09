<?php 
require 'functions.php';
$keuangan = query("SELECT * FROM keuangan ORDER BY nama_siswa ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=.con.con, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>keuangan</title>
</head>
<body>
  <div class="container">
    <div class="header"></div>
    <div class="sidebar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="keuangan.php">keuangan</a></li>
        <li><a href="tentang.php">Tentang Saya</a></li>
      </ul>
    </div>
    <div class="table">
    <div class="content">
        <h1>Data keuangan</h1>
        <button><a href="tambah.php">Tambah</a></button> <br><br>
        <table border="2">
    
          <tr>
            <td>NO</td>
            <td>ID Keuangan</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Bulan</td>
            <td>Jumlah</td>
          </tr>

          <?php $i = 1; ?>
          <?php foreach ($keuangan as $keuangan) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $keuangan['id_keu']; ?></td>
                <td><?= $keuangan['nama_siswa']; ?></td>
                <td><?= $keuangan['kelas']; ?></td>
                <td><?= $keuangan['bulan_bayar']; ?></td>
                <td><?= $keuangan['jumlah']; ?></td>
               
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </table>
    </div>
    <div class="clear"></div>
    <div class="footer">
      <center>
        copyright &copy; 2021 | by Praditya oktanza
      </center>
    </div>
  </div>
</body>
</html>