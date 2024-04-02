<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$buku = $_POST['buku'];
$genre = $_POST['genre'];

$query = "INSERT INTO perpus (nama, buku, genre)
            VALUES ('$nama', '$buku', '$genre')";

if ( $conn->query($query) === TRUE) {
    header("Location: index.php");
}

$conn->close();
?>