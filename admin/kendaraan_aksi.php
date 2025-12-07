<?php
include '../koneksi.php';

$nomor = $_POST['nomor'];
$nama  = $_POST['nama'];
$tipe  = $_POST['tipe'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO kendaraan 
(kendaraan_nomor, kendaraan_nama, kendaraan_tipe, kendaraan_harga_perhari) 
VALUES ('$nomor','$nama','$tipe','$harga')");

header("location:kendaraan.php");
exit();
?>