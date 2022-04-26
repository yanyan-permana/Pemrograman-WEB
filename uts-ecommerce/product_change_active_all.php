<?php
include 'mysql_connect.php';

// Cek jika typenya active_all maka update status menjadi 1 dan sebaliknya
$status = $_POST['type'] == 'active_all' ? 1 : 0;

// Looping data dari form yang dikirim oleh ajax
foreach ($_POST['id'] as $id) {
    // Eksukusi query update data ke table product
    $result = mysqli_query($conn, "update product set status='$status' where product_id = '$id'");
}

// Kembalikan pesan kedalam jquery
echo json_encode([
    'success' => true,
    'message' => 'Berhasil terupdate.',
]);
