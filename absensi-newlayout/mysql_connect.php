<?php
	$host		= "localhost";
	$username 	= "root";
	$password	= "";
	
	// mulai koneksi ke mysql
	$conn = mysqli_connect($host, $username, $password) or die ("Koneksi mysql gagal!");
	
	// nama database yang digunakan
	$nama_db = "absensi";
	
	// mulai koneksi ke database
	mysqli_select_db($conn, $nama_db) or die ("Koneksi database gagal");
?>