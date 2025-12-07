<?php
    include '../koneksi.php';
    $pinjam_id = $_POST['pinjam_id'];
    $kendaraan_nomor = $_POST['kendaraan_nomor'];
    $user_id = $_POST['user_id'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $pinjam_status = $_POST['pinjam_status'];
    mysqli_query($koneksi,"insert into pinjam values('$pinjam_id', '$kendaraan_nomor', '$user_id', '$tgl_pinjam','$tgl_kembali','$pinjam_status')");
    header("location:pinjam.php");
?>