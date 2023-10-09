<?php

$conn = mysqli_connect("localhost","root","","praditya");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;
    $id_keu         = htmlspecialchars($data['id_keu']);
    $nama_siswa     = htmlspecialchars($data['nama_siswa']);
    $kelas          = htmlspecialchars($data['kelas']);
    $bulan_bayar    = htmlspecialchars($data['bulan_bayar']);
    $jumlah         = htmlspecialchars($data['jumlah']);
    
    // insert data
    $query = "INSERT INTO keuangan VALUES('$id_keu','$nama_siswa','$kelas','$bulan_bayar','$jumlah')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>