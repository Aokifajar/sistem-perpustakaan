<!DOCTYPE html>
<html>
<head>
  <title>petugas</title>  
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
 
</head>
<body>
   <div class="navbar nav-left" >
   <a href="?page=tambah_petugas" class="btn btn-warning">Tambah</a></div>
  <center>
    <h4>Data petugas </h4>
  </center>

  <div class="container">
     <div class="table-responsive">
    <table class="table table-striped table-bordered data">
     <thead>
    <tr>
      <th>No</th>
      <th>Nama </th>
      <th>username</th>
      <th>Level</th>
      <th width="10">operasi</th>

    </tr>
     </thead>
  <tbody>
    <?php 
    include '../inc/koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"select * from petugas");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['level']; ?></td>
          <td width="10">
            <a href="?page=edit_petugas&id_petugas=<?php echo $d['id_petugas'];?>" class="mdi mdi-pencil"></a>&nbsp;&nbsp;
      <a href="?page=edit_petugas&hapus=<?php echo $d['id_petugas'];?>" class="mdi mdi-delete"></a>&nbsp;&nbsp;
        </td>
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