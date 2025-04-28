<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Customer Payments</h1>
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Customer Name</th>
                        <th class="py-3 px-6 text-left">Table Number</th>
                        <th class="py-3 px-6 text-left">Amount</th>
                        <th class="py-3 px-6 text-left">Payment Method</th>
                        <th class="py-3 px-6 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM pembayaran ORDER BY id DESC");
                    if ($result->num_rows > 0):
                        while($row = $result->fetch_assoc()):
                    ?>
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-3 px-6"><?php echo htmlspecialchars($row['customer_name']); ?></td>
                        <td class="py-3 px-6"><?php echo htmlspecialchars($row['table_number']); ?></td>
                        <td class="py-3 px-6">Rp <?php echo number_format($row['amount'], 0, ',', '.'); ?></td>
                        <td class="py-3 px-6"><?php echo htmlspecialchars($row['payment_method']); ?></td>
                        <td class="py-3 px-6"><?php echo htmlspecialchars($row['payment_status']); ?></td>
                    </tr>
                    <?php endwhile; else: ?>
                    <tr>
                        <td colspan="5" class="py-6 text-center text-gray-500">No Payments Found</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
