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

    // Mengambil parameter id diurl
    $id = $_GET['id'];

    // Membuat query berdasarkan id yang dipilih 
    $delete_query = "delete from master_mahasiswa where id = $id";

    // menjalankan perintah insert ke tabel
    $result = mysqli_query($conn, $delete_query);
    if (!$result) {
        echo "Gagal hapus data!";
    } else {
        echo "Data sudah dihapus!";
    }

    // menutup koneksi
    mysqli_close($conn);

    ?>
    <br>
    <a href="/pemrograman-web/absensi-newlayout/list_mahasiswa.php"> Go back </a>
</body>

</html>