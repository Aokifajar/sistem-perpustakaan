<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $nama_anggota=$_POST['nama_anggota'];
  $alamat=$_POST['alamat'];
  $nim=$_POST['nim'];
  $telepon=$_POST['telepon'];
  $query=mysqli_query($con,"INSERT INTO anggota VALUES('',$nim,'$nama_anggota','$alamat','$telepon')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=anggota";</script>';
  }
}
?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah anggota</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
        <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nim" placeholder="NIM" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nama_anggota" placeholder="Nama" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="alamat" placeholder="alamat" required=""><br>
          <input type="Telepon" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="telepon"
          placeholder="Telepon" required=""><br>      
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>