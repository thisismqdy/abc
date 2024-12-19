<?php

require_once 'koneksi.php';

$buku = new Buku();
$daftarBuku = $buku->tampilBuku();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/perpus/index.php">Perpustakaan</a>
</nav><br>
<div class="container">
    <h2>Daftar Buku</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarBuku as $key => $buku): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $buku['judul_buku']; ?></td>
                    <td><?php echo $buku['nama_pengarang']; ?></td>
                    <td><?php echo $buku['tahun_terbit']; ?></td>
                    <td><?php echo $buku['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>