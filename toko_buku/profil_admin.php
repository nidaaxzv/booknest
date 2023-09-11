<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login_admin.php");
    exit;
  }
$id_admin = $_SESSION["id_admin"];

$row = query("SELECT * FROM profil WHERE id_admin = $id_admin")[0];

if( isset($_POST["proses"])) {

    if(ubah($_POST) > 0) {
        echo "<script>
        alert('Profil berhasil diperbaharui!');
        document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Profil gagal diperbaharui!');
        document.location.href = 'admin.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages / Profil </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-xl p-7">
    <?php
    $id_admin = $_SESSION['id_admin'];
    ?>
    <a class="btn btn-close btn-sm" href="admin.php"></a>
    <h3 class="text-center">Profil Admin</h3>
    <form action="" method="post">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-sm " value="simpan" name="proses">Simpan</button>                     
        <br>
</div>
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?= $row["id_admin"]; ?>">
        </div>
        <div class="mb-3">
            <label for="inputNo" class="form-label fw-bolder">No. Induk</label>
            <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?= $row["no_induk"]; ?>">
        </div>
        <div class="mb-3">
            <label for="inputNama" class="form-label fw-bolder">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row["nama"]; ?>">
        </div>
        <div class="mb-3">
            <label for="inputNama" class="form-label fw-bolder">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row["alamat"]; ?>">
        </div>
        <div class="mb-3">
            <label for="inputAlamat" class="form-label fw-bolder">Kontak</label>
            <input type="tel" class="form-control" id="kontak" name="kontak" value="<?= $row["kontak"]; ?>">
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 pb-2">
                <label for="inputAlamat" class="form-label fw-bolder">Tanggal Lahir</label>
                <input type="date" class="form-control" id="ttl" name="ttl" value="<?= $row["ttl"]; ?>">
            </div> 
            <div class="col-md-6 mb-4 pb-2">
                <label for="inputAlamat" class="form-label fw-bolder">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <?php
                    echo "<option value='$row[jenis_kelamin]'>$row[jenis_kelamin]</option>";
                    ?>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>   
            </div>
        </div>  
    </form>
</div>
</body>
</html>