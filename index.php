<!DOCTYPE html>
<html lang="en">

  <head>

<!-- Required meta tags -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perpustakaan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet"href="css/bootstrap.css">
   <link rel="stylesheet"href="css/bootstrap.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.jpg" />
</head>


  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top py-2">
      <div class="container">
         <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" width="40" height="40" alt="">
          </a>
       <a class="navbar-brand" href="index.php">Sistem Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link fa fa-home" href="index.php">&nbsp;Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fa fa-product-hunt" href="?page=buku">&nbsp;Daftar Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fa fa-product-hunt" href="login.php">&nbsp;Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <!--konten-->
     <?php include"isi.php"; ?>
    <!-- /.container -->

  <div style="opacity: 0.8" class=" gototop js-top">
    <a href="#" class="js-gotop"><i  class="fa fa-angle-double-up"></i></a>
  </div>
  

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
  </body>

</html>
