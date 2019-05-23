<!DOCTYPE html>
<html>
<head>
  <title>anggota</title>  
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
 
</head>
<body>
   <div class="navbar nav-left" >
   <a href="?page=tambah_anggota" class="btn btn-warning">Tambah</a></div>
  <center>
    <h4>Data anggota </h4>
  </center>

  <div class="container">
     <div class="table-responsive">
    <table class="table table-striped table-bordered data">
     <thead>
    <tr>
      <th>No</th>
      <th>nim anggota</th>
      <th>Nama </th>
      <th>alamat</th>
      <th>Telepon</th>
      <th width="10">operasi</th>

    </tr>
     </thead>
  <tbody>
    <?php 
    include '../inc/koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"select * from anggota");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama_anggota']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['telepon']; ?></td>
          <td width="10">
            <a href="?page=edit_anggota&id_anggota=<?php echo $d['id_anggota'];?>" class="mdi mdi-pencil"></a>&nbsp;&nbsp;
      <a href="?page=edit_anggota&hapus=<?php echo $d['id_anggota'];?>" class="mdi mdi-delete"></a>&nbsp;&nbsp;
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