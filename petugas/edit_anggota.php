<?php
include"../inc/koneksi.php";
@$id_anggota=$_GET['id_anggota'];
$q=mysqli_query($con,"SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
$r=mysqli_fetch_array($q);
if (isset($_POST['edit'])) {
	$id_anggota=$_POST['id_anggota'];
	$nim=$_POST['nim'];
	$nama_anggota=$_POST['nama_anggota'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	$query=mysqli_query($con,"UPDATE anggota set nim='$nim',nama_anggota='$nama_anggota',alamat='$alamat',  telepon='$telepon' WHERE id_anggota='$id_anggota'");
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=anggota";</script>';
	}
}

if (isset($_GET['hapus'])) {
	$id_anggota=$_GET['hapus'];
	$query=mysqli_query($con,"DELETE FROM anggota WHERE id_anggota='$id_anggota'");
	if ($query) {
		echo'<script>alert("Data Berhasil Dihapus"); parent.location="?page=anggota";</script>';
	}
}
?>

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
		<div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
			<br>
			<h2><font face="verdana">ubah anggota</font></h2>
			<hr>
			<div class="col-md-8">
				<form method="post" action="">
					<input type="hidden"  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="id_anggota" value="<?php echo $id_anggota;?>"><br>
					<input type="text"  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nim" value="<?php echo $r['nim'];?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nama_anggota" value="<?php echo $r['nama_anggota'];?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="alamat" value="<?php echo $r['alamat'];?>"><br>
					<input type="telepon" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="telepon" value="<?php echo $r['telepon'];?>"><br>
					<br>
					<button class="btn btn-primary btn-lg" type="submit" name="edit">Simpan</button>
				</form>
			</div>
			<br><br>
		</div>
	</div>
</section>