<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="proses.php" method="post">
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nama / Id Perpustakaan : </label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Buku : </label> 
    <div class="col-8">
      <input id="buku" name="buku" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Genre : </label> 
    <div class="col-8">
      <input id="genre" name="genre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_peminjaman" class="col-4 col-form-label">Tanggal meminjam : </label> 
    <div class="col-8">
      <input id="tanggal_peminjaman" name="tanggal_peminjaman" type="date" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>