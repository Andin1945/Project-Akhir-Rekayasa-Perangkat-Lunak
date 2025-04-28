<?php
include '../db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-8">Data Pembayaran</h1>

<table class="table-auto w-full bg-white shadow rounded">
    <thead class="bg-purple-500 text-white">
        <tr>
            <th class="p-4">ID</th>
            <th class="p-4">Jumlah Bayar</th>
            <th class="p-4">Tanggal Bayar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM payments");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr class="border-b">
            <td class="p-4"><?= $row['id'] ?></td>
            <td class="p-4">Rp <?= number_format($row['amount'], 0, ',', '.') ?></td>
            <td class="p-4"><?= $row['payment_date'] ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<div class="mt-8">
    <a href="admin_dashboard.php" class="bg-gray-600 text-white px-6 py-2 rounded">Kembali</a>
</div>

</body>
</html>
