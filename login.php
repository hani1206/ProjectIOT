<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Smart Laundry</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>
<!-- cek pesan notifikasi -->
<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo "login gagal! username dan password salah!";
	} else if ($_GET['pesan'] == "logout") {
		echo "anda telah berhasil logout";
	} else if ($_GET['pesan'] == "belum login") {
		echo "anda harus login untuk mengakses halaman admin";
	}
}
?>
<section class="signup-section" id="login">
<div class="container">
                <div class="row">
<div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">LOGIN</h2>
<form method="POST" action="cek_login.php">
	<div class="row justify-content-md-center">
	<table>
		<tr>
			
			<td><input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nama" type="text" name="nama"  placeholder="Enter Username"></td>
		</tr>
		<tr>
			
			<td><input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="password" type="password" name="password" placeholder="Enter Password"></td>
		</tr>
			<td><input type="submit" class="btn btn-primary mx-auto" value="LOGIN"></td>
			<tr><td><button type="button" class="btn btn-light"><a href="regis.php">REGISTRASI</a> </button></td></tr>
		
	</table>
</div>

</form>
</div>
</div>
</div>
</section>
</body>
</html>