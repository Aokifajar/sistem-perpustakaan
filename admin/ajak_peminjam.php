<?php
include '../inc/koneksi.php';

$query = mysqli_query($con, "SELECT * FROM anggota WHERE nim='".mysqli_escape_string($con, $_POST['nim'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);