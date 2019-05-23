<!DOCTYPE html>
<html>
<head>
  <title>Pengguna</title>  
  <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
 
</head>
<body>
  <center>
    <h4>Data Buku </h4>
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
    $data = mysqli_query($con,"select * from buku");
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
</html>