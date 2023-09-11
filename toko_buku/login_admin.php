<?php
session_start();

if(isset($_COOKIE['login'])) {
  if($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

if (isset($_POST["login"])) {

  $user = $_POST["username"];
  $pw = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$user'");

  if( mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_array($result);

    $_SESSION["username"] = $row["username"];
    $_SESSION["id_admin"] = $row["id_admin"];
    if( password_verify($pw, $row["password"])) {
      //set session
      $_SESSION["login"] = true;
      header("Location: admin.php");
      exit;
      if(isset($_POST['remember'])) {
        setcookie('login', 'true', time() + 60);
      } 
     
      
      }
  }
  $error = true;

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="" method="post">
            <?php if (isset($error)) :?>
                  <p style="color: red; font-style: italic;">Username / Password salah!</p>
               <?php endif; ?>
              Username
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              Password
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat saya</label>
              </div>
              <button type="submit" name="login" class="btn btn-block btn-success mt-3 col-sm-4 mx-auto">Login</button>
              <div class="row">
                    <small>Belum punya akun? <a href="regist_admin.php" class="text-decoration-none">Registrasi </a></small>
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
