<?php
include '../koneksi.php';

$kendaraan_nomor = $_POST['kendaraan_nomor'];
$user_id         = $_POST['user_id'];
$tgl_pinjam      = $_POST['tgl_pinjam'];
$tgl_kembali     = $_POST['tgl_kembali'];
$pinjam_status   = $_POST['pinjam_status'];

$query = mysqli_query($koneksi, "INSERT INTO pinjam 
(kendaraan_nomor, user_id, tgl_pinjam, tgl_kembali, pinjam_status)
VALUES ('$kendaraan_nomor', '$user_id', '$tgl_pinjam', '$tgl_kembali', '$pinjam_status')");

if(!$query){
    echo mysqli_error($koneksi);
    exit();
}

header("Location: pinjam.php");
exit();
?>