<?php
include"../inc/koneksi.php";
@$id_petugas=$_GET['id_petugas'];
$q=mysqli_query($con,"SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
$r=mysqli_fetch_array($q);
if (isset($_POST['edit'])) {
	$id_petugas=$_POST['id_petugas'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	if ($password=='') {
		$query=mysqli_query($con,"UPDATE petugas set nama='$nama', username='$username', level='$level' WHERE id_petugas='$id_petugas'");
		if ($query) {
			echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=petugas";</script>';
		}
	}else{
		$query=mysqli_query($con,"UPDATE petugas set nama='$nama', username='$username',level='$level', password='$password' WHERE id='$id'");
		if ($query) {
			echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=petugas";</script>';
		}
	}
}

if (isset($_GET['hapus'])) {
	$id_petugas=$_GET['hapus'];
	$query=mysqli_query($con,"DELETE FROM petugas WHERE id_petugas='$id_petugas'");
	if ($query) {
		echo'<script>alert("Data Berhasil Dihapus"); parent.location="?page=petugas";</script>';
	}
}
?>

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
		<div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
			<br>
			<h2><font face="verdana">ubah petugas</font></h2>
			<hr>
			<div class="col-md-8">
				<form method="post" action="">
					<input type="hidden" name="id_petugas" value="<?php echo $id_petugas;?>">
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="nama" value="<?php echo $r['nama'];?>"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="username" value="<?php echo $r['username'];?>"><br>
					<input type="password" class="form-control" placeholder="isi untuk mengganti password" style="height: 50px;width:500px;border:1px solid #999" name="password"><br>
					<input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="level" value="<?php echo $r['level'];?>"><br>
					<br>
					
					<br>
					<button class="btn btn-primary btn-lg" type="submit" name="edit">Simpan</button>
				</form>
			</div>
			<br><br>
		</div>
	</div>
</section>