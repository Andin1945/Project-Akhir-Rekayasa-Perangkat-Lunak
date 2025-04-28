<?php
include '../db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Customer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-8">Data Customer</h1>

<table class="table-auto w-full bg-white shadow rounded">
    <thead class="bg-blue-500 text-white">
        <tr>
            <th class="p-4">ID</th>
            <th class="p-4">Nama</th>
            <th class="p-4">Email</th>
            <th class="p-4">No HP</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM customers");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr class="border-b">
            <td class="p-4"><?= $row['id'] ?></td>
            <td class="p-4"><?= htmlspecialchars($row['name']) ?></td>
            <td class="p-4"><?= htmlspecialchars($row['email']) ?></td>
            <td class="p-4"><?= htmlspecialchars($row['phone']) ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<div class="mt-8">
    <a href="admin_dashboard.php" class="bg-gray-600 text-white px-6 py-2 rounded">Kembali</a>
</div>

</body>
</html>
