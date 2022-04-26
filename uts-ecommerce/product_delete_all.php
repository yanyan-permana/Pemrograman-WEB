<?php
include 'mysql_connect.php';

// Looping data dari form yang dikirim oleh ajax
foreach ($_POST['id'] as $id) {
    // Eksukusi query delete data ke table product
    $result = mysqli_query($conn, "delete from product where product_id = '$id'");
}

// Kembalikan pesan kedalam jquery
echo json_encode([
    'success' => true,
    'message' => 'Berhasil terhapus.',
]);
