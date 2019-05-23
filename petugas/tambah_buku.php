<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $nama_buku=$_POST['nama_buku'];
  $penerbit=$_POST['penerbit'];
  $tahun=$_POST['tahun'];
  $rak=$_POST['rak'];
  $query=mysqli_query($con,"INSERT INTO buku VALUES('','$nama_buku','$penerbit','$tahun','$rak')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=buku";</script>';
  }
}
?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah Buku</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nama_buku" placeholder="nama buku" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="penerbit" placeholder="penerbit" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="tahun"
          placeholder="tahun" required=""><br> 
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="rak"
          placeholder="No Rak" required=""><br>      
          <br>
          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>