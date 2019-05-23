<?php
@session_start();
include"inc/koneksi.php";
//validasi login
$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysqli_query($con,"select * from petugas where username='$username' and password=md5('$password')"); 
$cek=mysqli_num_rows($query); 
if($cek > 0){
	$data = mysqli_fetch_assoc($query);
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:petugas/index.php");
  }else{
 
		// alihkan ke halaman login kembali
		header("location:index.php");
	}	
}else{
	header("location:index.php");
}
 
?>