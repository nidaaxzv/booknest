<?php
  $host = "localhost"; // Server Local
  $user = "root";
  $password = "";
  $db = "toko_buku";
  // isi nama host, username mysql, password mysql, dan nama Database mysql
  $connect = mysqli_connect($host,$user,$password,$db);

  if(!$connect) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}

function query($query){
  global $connect;
  $result = mysqli_query($connect, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  return $rows;
}

function registrasi($data) {
  global $connect;

  $username = ($data["username"]);
  $password = ($data["password"]);
  $password2 = ($data["password2"]);
  $id = "";

  //cek username
  $result = mysqli_query($connect, "SELECT username FROM admin WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
      echo "<script>
      alert('username sudah terdaftar!');
      </script>";
      return false;
  }
  //cek konfirmasi pw
  if($password !== $password2) {
      echo "<script>
      alert('konfirmasi password tidak sesuai!');
      </script>";
      return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  $result = mysqli_query($connect, "INSERT INTO admin VALUES('$id','$username', '$password')");
  $row = mysqli_fetch_array($result);

  $_SESSION["id_admin"] = $row["id_admin"];
  return mysqli_affected_rows($connect);

}
  function ubah($data) {
    global $connect;

    $id_admin = ($data["id_admin"]);
    $no_induk = ($data["no_induk"]);
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $kontak = ($data["kontak"]);
    $jenis_kelamin = ($data["jenis_kelamin"]);
    $ttl = ($data["ttl"]);

    mysqli_query($connect, "UPDATE profil SET no_induk='$no_induk', nama='$nama', alamat='$alamat', kontak='$kontak', jenis_kelamin='$jenis_kelamin', 
    ttl='$ttl' WHERE id_admin=$id_admin");

    return mysqli_affected_rows($connect);
  }

  function tambah($data) {
    global $connect;

    $no_induk = ($data["no_induk"]);
    $id_admin = ($data['id_admin']);
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $kontak = ($data["kontak"]);
    $jenis_kelamin = ($data["jenis_kelamin"]);
    $ttl = ($data["ttl"]);

    $sql = "INSERT INTO profil VALUES('$no_induk', '$id_admin', '$nama','$alamat','$kontak','$jenis_kelamin','$ttl')";
    mysqli_query($connect, $sql);

    return mysqli_affected_rows($connect);
  }

  function tambahCust($data) {
    global $connect;

    $id_customer = ($data["id_customer"]);
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $kontak = ($data["kontak"]);

    $sql = "INSERT INTO customer VALUES('$id_customer','$nama','$alamat','$kontak')";
    mysqli_query($connect, $sql);

    return mysqli_affected_rows($connect);
  }

  function ubahCust($data) {
    global $connect;

    $id_customer = ($data["id_customer"]);
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $kontak = ($data["kontak"]);

    mysqli_query($connect, "UPDATE customer SET nama='$nama', alamat='$alamat', kontak='$kontak' WHERE id_customer='$id_customer'");

    return mysqli_affected_rows($connect);
  }

  function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM customer WHERE id_customer = $id");

    return mysqli_affected_rows($connect);
  }

 ?>


