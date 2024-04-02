<?php

    include 'koneksi.php';

    $query = "SELECT * FROM perpus";
    $result = $conn->query($query);
    // result data yang disimpan dan belum dikeluarkan
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Perpustakaan</title>

    <style>
#perpustakaan {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#perpustakaan td, #perpustakaan th {
  border: 1px solid #ddd;
  padding: 8px;
}

#perpustakaan tr:nth-child(even){background-color: #f2f2f2;}

#perpustakaan tr:hover {background-color: #ddd;}

#perpustakaan th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <h2 style="text-align:center;">DATA PERPUSTAKAAN</h2>
    <hr>
    <br>
    <table id="perpustakaan">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Buku</th>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
    
        <?php while( $row = $result->fetch_assoc() ) :  ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['buku'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td>
                <a href="edit.php">Edit</a>
                <a href="delete.php">Delete</a>
            </td>
        </tr>
        <?php  endwhile //pengganti kurung kurawal {} ?>

        </table>
    <br>
    <hr>
    <h2>Tambah Peminjam Buku</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Buku: <input type="text" name="buku" required><br><br>
        Genre: <input type="text" name="genre" required><br><br>
        <input type="submit" value="Tambah" style="background-color: MediumSeaGreen">
    </form>
</body>
</html>