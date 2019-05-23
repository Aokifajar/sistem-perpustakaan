<?php
@$page=htmlentities($_GET['page']);
$halaman="$page.php";

if(!file_exists($halaman) || empty($page)){
	include "../petugas/home1.php";
}else{
	include "$halaman";
}
?>