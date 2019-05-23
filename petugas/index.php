<?php
@session_start();
include"../inc/koneksi.php";
if(@$_SESSION['username']){
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
   #p{
   color: #2980b9;
   font-size: 22px;
   font-weight: bold;
   font-family:Rockwell, Calibri, Monospace;
    }
 </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perpustakaan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet"href="../css/bootstrap.css">
   <link rel="stylesheet"href="../css/bootstrap.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="../images/logo.jpg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
       
       
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello,<?=$_SESSION['username'];?></span>
              <img class="img-xs rounded-circle" src="../images/logo.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  
              </a>
             
              <a class="dropdown-item" href="logout.php">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../images/logo.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Sistem Perpustakaan</p>
                  
                </div>
              </div>
             
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=home1">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=tambah_peminjaman">
              <i class="menu-icon mdi mdi-plus"></i>
              <span class="menu-title">Tambah Peminjaman buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=anggota">
              <i class="menu-icon mdi mdi-account-card-details"></i>
              <span class="menu-title">Data anggota</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=buku">
              <i class="menu-icon mdi mdi-library-books"></i>
              <span class="menu-title">Data Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=peminjaman">
              <i class="menu-icon mdi mdi-library-books"></i>
              <span class="menu-title">Data peminjam</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=laporan">
              <i class="menu-icon mdi mdi-plus-network"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        
           <!--<li class="nav-item">
            <a class="nav-link" href="?page=rekening">
              <i class="menu-icon mdi mdi-wallet"></i>
              <span class="menu-title">pembayaran</span>
            </a>
          </li>-->
         
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>
         
           <div class="container">
            <!--First row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" style="text-align:center;background-color:#fff;">
                       <?php include"isi.php"; ?>
                    </div>
                </div>
            </div>
  
           
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="#" target="_blank">Sistem perpustakaan</a>. All rights reserved.</span>
           
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php
}else{
    ?><script type="text/javascript">alert("tidak berhak mengakses halaman ini"); parent.location=' /perpustakaan/index.php';</script><?php
}
?>