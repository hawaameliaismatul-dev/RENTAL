<?php
    include 'header.php';
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4><b>Data Peminjaman</b></h4>
        </div>
        <div class="panel-body">
            <a href="pinjam_tambah.php" class="btn btn-sm btn-success pull-right">+Tambah</a>
            <br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="15%">ID Pinjam</th>
                    <th>Nomor Kendaraan</th>
                    <th>ID User</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                    include '../koneksi.php';
                    $data = mysqli_query($koneksi,"select * from pinjam");
                    $no = 1;
                    while ($d=mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['pinjam_id']; ?></td>
                        <td><?php echo $d['kendaraan_nomor']; ?></td>
                        <td><?php echo $d['user_id']; ?></td>
                        <td><?php echo $d['tgl_pinjam']; ?></td>
                        <td><?php echo $d['tgl_kembali']; ?></td>
                        <td>
                            <?php
                                if ($d['pinjam_status']=='1') {
                                    echo "<div class='label label-info'>READY</div>";
                                }elseif ($d['pinjam_status']=='2') {
                                    echo "<div class='label label-warning'>DIPINJAM</div>";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="pinjam_edit.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-info Edit">Edit</a>
                            <a href="pinjam_hapus.php?id=<?php echo $d['pinjam_id']; ?>" class="btn btn-sm btn-danger">Batalkan</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>