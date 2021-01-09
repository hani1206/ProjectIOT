<?php
    include "cek_regis.php";

    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "INSERT INTO admin VALUES(' ','$nama','$password')") or die(mysqli_error($konek)); 

    if($query){ ?>
      
	        <h4>Input Data Berhasil </h4>
	        <?php 
	        header("location:login.php"); ?>
        	
    <?php } 
    else { echo "<h2>INPUT DATA GAGAL</h2>"; }
	
