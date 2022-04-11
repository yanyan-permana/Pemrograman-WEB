<!DOCTYPE html>
<html>

<head>
	<title>Proses Simpan Data...</title>
</head>

<body>
	<?php
	// var_dump($_POST);
	// die;
	include 'mysql_connect.php';

	// menyimpan data kedalam variabel
	$nim            = $_POST['nim'];
	$nama_mhs       = $_POST['nama_mhs'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$tgl_lahir      = date("Y-m-d", strtotime($_POST['tgl_lahir']));
	$alamat         = $_POST['alamat'];
	$no_telp        = $_POST['no_telp'];
	$email          = $_POST['email'];
	$semester       = $_POST['semester'];

	$insert_query = "insert into master_mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, alamat, no_tlp, email, semester) values ('$nim', '$nama_mhs','$jenis_kelamin','$tgl_lahir','$alamat','$no_telp','$email','$semester')";

	// menjalankan perintah insert ke tabel
	$result = mysqli_query($conn, $insert_query);
	if (!$result) {
		echo "Gagal simpan data!";
	} else {
		echo "Data sudah disimpan!";
	}

	// menutup koneksi
	mysqli_close($conn);

	?>
	<br>
	<a href="/pemrograman-web/absensi-newlayout/input_mahasiswa.php?action_menu=INSERT"> Go back </a>
</body>

</html>