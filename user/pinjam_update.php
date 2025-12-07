<?php
include '../koneksi.php';

    $id_lama = $_POST['id_lama'];   
    $pinjam_id = $_POST['pinjam_id'];
    $kendaraan_nomor = $_POST['kendaraan_nomor'];
    $user_id = $_POST['user_id'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $pinjam_status = $_POST['pinjam_status'];

mysqli_query($koneksi,"UPDATE pinjam SET
    pinjam_id='$pinjam_id',
    kendaraan_nomor='$kendaraan_nomor',
    user_id='$user_id ',
    tgl_pinjam='$tgl_pinjam',
    tgl_kembali='$tgl_kembali',
    pinjam_status='$pinjam_status'
    WHERE pinjam_id='$id_lama'
");

echo "<script>alert('Data Telah Diubah'); window.location.href='pinjam.php'</script>";
?>