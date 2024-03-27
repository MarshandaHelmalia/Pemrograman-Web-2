<?php

$nama = $_POST['nama'];
$buku = $_POST['buku'];
$genre = $_POST['genre'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];


include 'Peminjam.php';

$peminjam = new Peminjam($nama, $buku, $genre);
$tanggal = $peminjam->hitungTanggalPengembalian($tanggal_peminjaman);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Welcome <?= $nama ?></h1>
    <table border="1" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Buku</th>
                <th>Genre</th>
                <th>Tanggal mengembalikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $nama ?></td>
                <td><?= $buku ?></td>
                <td><?= $genre ?></td>
                <td><?= $tanggal ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>