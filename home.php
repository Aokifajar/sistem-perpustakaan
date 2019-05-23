<!DOCTYPE html>
<html>
<head>
  <title>anggota</title>  
</head>
<body>
   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
<div  id="demo" class="carousel slide container" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a.jpg"  width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="images/b.jpg"  width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="images/c.jpg"  width="1100" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
  <center>
    <h4>Daftar Buku Terbaru </h4>
  </center>
  <div class="container">
     <div class="table-responsive">
    <table class="table table-striped table-bordered data">
     <thead>
    <tr bgcolor='#298ob9' >
      <th>No</th>
      <th>Nama Buku </th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>No Rak</th>
    </tr>
     </thead>
  <tbody>
    <?php 
    include 'inc/koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"select * from buku GROUP BY id_buku ORDER BY id_buku DESC LIMIT 6");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['nama_buku']; ?></td>
        <td><?php echo $d['penerbit']; ?></td>
        <td><?php echo $d['tahun']; ?></td>
        <td><?php echo $d['rak']; ?></td>
      </tr>
      <?php 
    }
    ?>
  </tbody>
  </table>
  <br>
</html>