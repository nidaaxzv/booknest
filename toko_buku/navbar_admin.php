
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- start header-menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light position-sticky fixed-top mb-2">
   <div class="container">
       <a class="navbar-brand" href="index.php" style="font-family: 'Shadows Into Light', cursive; font-size: 170%;">BookNest</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <div class="navbar-nav">
           <a class="nav-item nav-link" href="admin.php">Admin</a>
           <a class="nav-item nav-link" href="customer.php">Customer</a>
           <a class="nav-item nav-link" href="buku.php">Buku</a>
         </div>
           <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
             <?php echo $_SESSION["username"]; ?><a class="nav-link active d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="bi bi-caret-down-fill"></i>
               </a>
               
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="profil_admin.php">Profile</a>
                 <a href="logout.php" class="dropdown-item bg-dark text-light" onclick="return confirmLogout()">Keluar</a>
               </div>
             </li>
           </ul>
       </div>
   </div>
   <script>
    function confirmLogout() {
        return confirm("Apakah Anda yakin ingin keluar?");
    }
</script>
 </nav>
<!-- end header-menu -->
