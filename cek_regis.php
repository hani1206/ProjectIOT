<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "pengguna";
$konek = mysqli_connect($hostname, $username, $password, $database);
if ($konek->connect_error) {
	die('koneksi gagal : '. $connect->error)
;
}
?>