<?php 
//koneksi ke function
require 'functions.php';

//cek apakah tombol data sudah di klik atau belum
if (isset($_POST["save"]))  {
    //apakah berhasil di tambah atau tidak 
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert ('Berhasil Di Tambah');
        document.location.href ='keuangan.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Gagal Tambah');
        document.location.href ='keuangan.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=.con.con, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>
</head>
<body>
  <div class="container">
    <div class="header"></div>
    <div class="sidebar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="keuangan.php">Keuangan</a></li>
        <li><a href="tentang.php">Tentang Saya</a></li>
      </ul>
    </div>
    <div class="content">
      <h1>Tambah Data</h1>

      <form action="" method="POST">
          <table>
              <tr>
                  <td>
                      <label for="id_keu">ID Keuangan</label>
                  </td>
                  <td>
                      <input type="text" name="id_keu" id="id_keu" require>
                  </td>
              </tr>
              <tr>
                  <td>
                      <label for="nama_siswa">Nama</label>
                  </td>
                  <td>
                      <input type="text" name="nama_siswa" id="nama_siswa" require>
                  </td>
              </tr>
              <tr>
                  <td>
                      <label for="kelas">Kelas</label>
                  </td>
                  <td>
                      <input type="text" name="kelas" id="kelas" require>
                  </td>
              </tr>
              <tr>
                  <td>
                      <label for="bulan_bayar">Bulan</label>
                  </td>
                  <td>
                      <input type="text" name="bulan_bayar" id="bulan_bayar" require>
                  </td>
              </tr>
              <tr>
                  <td>
                      <label for="jumlah">Jumlah</label>
                  </td>
                  <td>
                      <input type="text" name="jumlah" id="jumlah" require>
                  </td>
              </tr>
              <tr>
                  <td>
                      &nbsp;
                  </td>
                  <td>
                      <button type="sumbit" name="save">Tambah Data</button>
                  </td>
              </tr>
            </table>
      </form>
    </div>
    <div class="clear"></div>
    <div class="footer">
      <center>
        copyright &copy; 2021 | by Praditya Oktanza
      </center>
    </div>
  </div>
</body>
</html>