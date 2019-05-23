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
   <a href="?page=tambah_peminjaman" class="btn btn-warning">Tambah</a></div>
  <center>
    <h4>Data peminjaman </h4>
  </center>

  <div class="container">
     <div class="table-responsive">
    <table class="table table-striped table-bordered data">
     <thead>
    <tr>
      <th>No</th>
      <th>nama anggota</th>
      <th>Nama buku </th>
      <th>Penerbit</th>
      <th>Tanggal Peminjam </th>
      <th width="10">operasi</th>

    </tr>
     </thead>
  <tbody>
    <?php 
    include '../inc/koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"SELECT b.penerbit,a.id_peminjaman,a.nama_anggota,b.nama_buku,a.tanggal FROM peminjaman a 
                              INNER JOIN buku b ON a.id_buku=b.id_buku");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['nama_anggota']; ?></td>
        <td><?php echo $d['nama_buku']; ?></td>
        <td><?php echo $d['penerbit']; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
          <td width="10">
      <a href="?page=hapus_peminjam&hapus=<?php echo $d['id_peminjaman'];?>" class="mdi mdi-delete"></a>&nbsp;&nbsp;
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