<?php
  if (isset($_POST["save_customer"])) {
    // issset digunakan untuk mengecek
    // apakah ketika mengakses file ini, dikirimkan
    // data dengan nama "save_customer" dengan method post

    // tampung data yang dikirimkan
    $action = $_POST["action"];
    $id_customer = $_POST["id_customer"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $kontak = $_POST["kontak"];

    // load file config.php
    require 'functions.php';

    // cek aksinya
    if ($action == "insert") {
      // Sintaks untuk Insert
          if(tambahCust($_POST) > 0) {
                echo "<script>
                    alert('Customer berhasil ditambah!');
                    document.location.href = 'customer.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Customer gagal ditambah!');
                    document.location.href = 'customer.php';
                    </script>";
                }
    } else if ($action == "update") {
      // Sintaks untuk update
              if(ubahCust($_POST) > 0) {
                echo "<script>
                    alert('Customer berhasil diubah!');
                    document.location.href = 'customer.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Customer gagal diubah!');
                    document.location.href = 'customer.php';
                    </script>";
                }

    // redirect ke halaman customer.php
    // header("location:customer.php");
  }
}
 ?>
