<?php

require_once 'koneksi.php';

$loker = new LokerBuku();
$daftarLoker = $loker->tampilLoker("Buku Resep Makanan");
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/perpus/index.php">Perpustakaan</a>
</nav><br>
<div class="container">
    <h2>Daftar Loker Buku</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Loker</th>
                <th>No Rak</th>
                <th>No Laci</th>
                <th>No Boks</th>
                <th>Jumlah Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarLoker as $key => $lok): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $lok['loker_buku']; ?></td>
                    <td><?php echo $lok['no_rak']; ?></td>
                    <td><?php echo $lok['no_laci']; ?></td>
                    <td><?php echo $lok['no_boks']; ?></td>
                    <td><?php echo $lok['judul_buku']; ?></td>
                    <td><?php echo $lok['nama_pengarang']; ?></td>
                    <td><?php echo $lok['tahun_terbit']; ?></td>
                    <td><?php echo $lok['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>