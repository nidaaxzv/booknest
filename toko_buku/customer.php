<?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("location:admin_login.php");
  }

  require 'functions.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer - BookNest</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
      Add = () =>{
        document.getElementById('action').value = "insert";
        document.getElementById('id_customer').value = "";
        document.getElementById('nama').value = "";
        document.getElementById('alamat').value = "";
        document.getElementById('kontak').value = "";
      }
      Edit = (item) =>{
        document.getElementById('action').value = "update";
        document.getElementById('id_customer').value = item.id_customer;
        document.getElementById('nama').value = item.nama;
        document.getElementById('alamat').value = item.alamat;
        document.getElementById('kontak').value = item.kontak;
      }
    </script>
  </head>
  <body>
    <!-- Start-Navbar -->
    <?php
      include("navbar_admin.php");
    ?>
    <!-- End-Navbar -->

    <?php
      // Perintah SQL untuk Menampilkan Data Customer
      if (isset($_POST["find"])) {
        // Query jika Melakukan Pencarian
        $find = $_POST["find"];
        // $sql = "select * from customer
        //         where id_customer like '%$find%'
        //         or nama like '%$find%'
        //         or alamat like '%$find%'
        //         or kontak like '%$find%'";
        $sql2 = "SELECT * FROM customer WHERE id_customer LIKE '%$find%' OR nama LIKE '%$find%'
        OR alamat LIKE '%$find%' OR kontak LIKE '%$find%'";
      } else {
        // Query Jika tidak mencari
        $sql2 = "SELECT * FROM customer";
      }
      // eksekusi perintah sql
      // $connect -> mengambil dari config.php
      $query = mysqli_query($connect, $sql2);
     ?>

    <div class="container">
      <!-- card -->
      <div class="card">
        <div class="card-header bg-success text-light text-center">
          <h4>Data Customer</h4>
        </div>
        <!-- start-body -->
        <div class="card-body">
          <div class="overflow-auto text-center">
          <!-- start-search -->
          <form action="customer.php" method="post">
            <input type="text" name="find" class="form-control mb-2 col-sm-3 float-right" placeholder="Pencarian...">
          </form>
          <!-- end-search -->
          <table class="table border">
            <thead>
              <th>No.</th>
              <th>ID Customer</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kontak</th>
              <th>Option</th>
            </thead>
            <tbody>
              <?php
                $number = 1;
                foreach ($query as $customer): ?>
                <tr>
                  <td>
                    <?php echo $number ?>
                  </td>
                  <td><?php echo $customer["id_customer"] ?></td>
                  <td><?php echo $customer["nama"] ?></td>
                  <td><?php echo $customer["alamat"] ?></td>
                  <td><?php echo $customer["kontak"] ?></td>
                  <td>
                    <button type="button" name="Edit" class="btn btn-sm btn-info"
                            data-toggle="modal" data-target="#modal_customer"
                            onclick='Edit(<?php echo json_encode($customer);?>)'>Edit</button>
                            
                    <a href="delete_customer.php?id_customer=<?= $customer["id_customer"]; ?>"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">
                        <button type="button" name="hapus" class="btn btn-sm btn-danger">Hapus</button>
                    </a>
                  </td>
                </tr>
              <?php $number++; endforeach; ?>
            </tbody>
          </table>
        </div>
          <button type="button" name="btnTambah" class="btn btn-sm btn-success float-right"
                  data-toggle="modal" data-target="#modal_customer" onclick="Add();">Tambah Data</button>
        </div>
        <!-- end-body -->

        <!-- start-footer -->
        <div class="card-footer text-center">
          <p>&copy;2023 <br> BookNest</p>
        </div>
        <!-- end-footer -->
      </div>
      <!-- end card -->
      <!-- Start Modal -->
      <div class="modal fade" id="modal_customer">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="process_crud_customer.php" method="post">
                <div class="modal-header bg-danger text-light">
                  <h4 class="modal-title">Form Data Customer</h4>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="action" id="action">
                  ID Customer
                  <input type="number" name="id_customer" id="id_customer" class="form-control" required />
                  Nama
                  <input type="text" name="nama" id="nama" class="form-control" required />
                  Alamat
                  <input type="text" name="alamat" id="alamat" class="form-control" required />
                  Kontak
                  <input type="text" name="kontak" id="kontak" class="form-control" required />

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="save_customer" class="btn btn-success">Simpan</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal -->
    </div>
  </body>
</html>
