<?php
include 'koneksi.php';
session_start();

// Tangkap data dari form
$nama = $_POST['nama'];
$nomor_meja = $_POST['nomor_meja'];
$total_amount = $_POST['total_amount'];

// Insert ke customers
$stmtCustomer = $conn->prepare("INSERT INTO customers (nama, nomor_meja) VALUES (?, ?)");
$stmtCustomer->bind_param("ss", $nama, $nomor_meja);
$stmtCustomer->execute();
$customer_id = $stmtCustomer->insert_id;

// Insert ke orders
$stmtOrder = $conn->prepare("INSERT INTO orders (customer_id, total_amount) VALUES (?, ?)");
$stmtOrder->bind_param("id", $customer_id, $total_amount);
$stmtOrder->execute();
$order_id = $stmtOrder->insert_id;

// Simpan ke sesi
$_SESSION['customer_id'] = $customer_id;
$_SESSION['order_id'] = $order_id;
$_SESSION['total_amount'] = $total_amount;

// Arahkan ke payment
header("Location: payment.php");
exit;
?>
