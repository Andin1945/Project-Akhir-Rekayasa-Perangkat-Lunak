<?php
include '../db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-8">Data Pesanan</h1>

<table class="table-auto w-full bg-white shadow rounded">
    <thead class="bg-green-500 text-white">
        <tr>
            <th class="p-4">ID</th>
            <th class="p-4">Customer ID</th>
            <th class="p-4">Nama Menu</th>
            <th class="p-4">Jumlah</th>
            <th class="p-4">Tanggal Pesan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT orders.*, menus.name as menu_name FROM orders JOIN menus ON orders.menu_id = menus.id");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr class="border-b">
            <td class="p-4"><?= $row['id'] ?></td>
            <td class="p-4"><?= $row['customer_id'] ?></td>
            <td class="p-4"><?= htmlspecialchars($row['menu_name']) ?></td>
            <td class="p-4"><?= $row['quantity'] ?></td>
            <td class="p-4"><?= $row['order_date'] ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<div class="mt-8">
    <a href="admin_dashboard.php" class="bg-gray-600 text-white px-6 py-2 rounded">Kembali</a>
</div>

</body>
</html>
