<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $nama=$_POST['nama'];
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $level=$_POST['level'];
  $query=mysqli_query($con,"INSERT INTO petugas VALUES('','$nama','$username','$password','$level')");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=petugas";</script>';
  }
}
?>
<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Tambah petugas</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nama" placeholder="Nama" required=""><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="username" placeholder="username" required=""><br>
          <input type="password" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="password"
          placeholder="password" required=""><br>
          <select class="form-control" name="level" style="height: 50px;width:500px;border:1px solid #999">
					<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>
					</select><br>

          <button class="btn btn-primary btn-lg" type="submit" name="simpan">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>