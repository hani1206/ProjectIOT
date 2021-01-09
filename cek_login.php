<?php
session_start();

$query=new mysqli('localhost', 'root', '', 'pengguna');
$nama = $_POST['nama'];
$password = $_POST['password'];
$data = mysqli_query($query, "select * from admin where nama = '$nama' and password = '$password'")or die (mysqli_error($query));
$cek = mysqli_num_rows($data);
if ($cek > 0) {
	$_SESSION ['nama'] = $nama;
	$_SESSION ['status'] = "login";
	header("location:home.php");
} 
else { header("location:login.php?pesan=gagal");}
?>