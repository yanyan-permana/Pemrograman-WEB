<?php

	try {
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
			echo json_encode(array("status"=>0));
		} else {
			echo json_encode(array("status"=>1));
		}
		 
	} catch (Exception $ex) {
		echo $ex->getMessage();
	} finally {
		// menutup koneksi
		mysqli_close($conn);
	}
?>
