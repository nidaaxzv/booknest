<?php
session_start();
require 'functions.php';

$sql = "SELECT * FROM profil ORDER BY no_induk DESC";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$user = $_SESSION["username"];

$sql2 = "SELECT * FROM admin WHERE username = '" . $user . "'";

$results = mysqli_query($connect, $sql2);
if (!$results) {
    echo mysqli_error($connect);
    exit; // Hentikan eksekusi jika terjadi kesalahan
}
$row2 = mysqli_fetch_array($results);


if( isset($_POST["submit"])) {

  if(tambah($_POST) > 0) {
      echo "<script>
      alert('Profil berhasil dilengkapi!');
      document.location.href = 'login_admin.php';
      </script>";
  } else {
      echo mysqli_error($connect);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
<a class="btn btn-close btn-sm" href="regist_admin.php"></a>
    <h2 class="text-center">Form Profil</h2>
    <form method="POST" action="">
      <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?= $row2["id_admin"]; ?>" required>

        <div class= "form-group mb-3">
            <label for="nama_barang">No. Induk</label>
            <?php
            $lastNoInduk = $row["no_induk"]; // Get the last used No. Induk from the database or any other source
            
            // Extract the numeric part of the last No. Induk and increment it
            $numericPart = (int) substr($lastNoInduk, 1);
            $nextNumericPart = $numericPart + 1;
            
            // Pad the numeric part with leading zeros to maintain the desired format
            $nextNoInduk = 'B' . sprintf("%03d", $nextNumericPart);
            ?>
            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?= $nextNoInduk ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="nim">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group mb-3">
            <label for="unit_barang">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_peminjaman">Kontak</label>
            <input type="tel" class="form-control" id="kontak" name="kontak" required>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_peminjaman">Jenis Kelamin</label>
            <div>
              <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</div>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_peminjaman">Tanggal Lahir</label>
            <input type="date" class="form-control" id="ttl" name="ttl" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    </form>
</div>
</body>
