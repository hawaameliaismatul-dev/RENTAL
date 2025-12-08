<?php
include '../koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: pinjam.php");
    exit;
}

$id = $_GET['id'];

// cek data pinjam
$q = mysqli_query($koneksi,
    "SELECT pinjam_id 
     FROM pinjam 
     WHERE pinjam_id='$id'"
);

if (!$q || mysqli_num_rows($q) == 0) {
    header("Location: pinjam.php");
    exit;
}

// update status pinjam saja
$update = mysqli_query($koneksi,
    "UPDATE pinjam 
     SET pinjam_status='1'
     WHERE pinjam_id='$id'"
);

if ($update) {
    header("Location: pinjam.php?kembali=sukses");
    exit;
} else {
    echo "Gagal mengembalikan kendaraan";
}