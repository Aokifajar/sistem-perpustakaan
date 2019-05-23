<?php
include"../inc/koneksi.php";
if (isset($_GET['hapus'])) {
	$id_peminjaman=$_GET['hapus'];
	$query=mysqli_query($con,"DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
	if ($query) {
		echo'<script>alert("Data Berhasil Dihapus"); parent.location="?page=peminjaman";</script>';
	}
}
?>
