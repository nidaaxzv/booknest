<?php
session_start();
require 'functions.php';

if( isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        $_SESSION["username"] = $_POST["username"];
        echo "<script>
        alert('Admin baru berhasil ditambahkan!');
        document.location.href = 'input_profil_admin.php';
        </script>";
    } else {
        echo mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <!-- css-bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- js-bootstrap -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
      <!-- start-card -->
      <div class="mx-auto col-sm-6 mt-5">
        <p class="text-center" href="#" style="font-family: 'Shadows Into Light', cursive; font-size: 250%;">BookNest</p>
        <div class="card">
          <div class="card-header bg-success text-light text-center">
            <h4>Registrasi</h4>
          </div>
          <div class="card-body">
            <form action="" method="post">
              Username
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              Password
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              Konfirmasi Password
              <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
              <button type="submit" name="register" class="btn btn-block btn-success mt-3 col-sm-4 mx-auto">Registrasi</button>
              <div class="row">
                    <small>Sudah punya akun? <a href="login_admin.php" class="text-decoration-none"> Login </a></small>
                </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p>&copy;2023 <br> BookNest</p>
          </div>
        </div>
      </div>
      <!-- end-card -->
    </div>
  </body>
</html>
