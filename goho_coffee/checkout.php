<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Goho Coffee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="payment.php" method="POST" class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Checkout</h2>
        <input type="text" name="customer_name" placeholder="Your Name" class="w-full mb-4 p-2 border rounded" required>
        <input type="number" name="table_number" placeholder="Table Number" class="w-full mb-4 p-2 border rounded" required>
        <input type="number" name="amount" placeholder="Amount" class="w-full mb-4 p-2 border rounded" required>
        <select name="payment_method" class="w-full mb-6 p-2 border rounded" required>
            <option value="">Select Payment Method</option>
            <option value="Cash">Cash</option>
            <option value="QRIS">QRIS</option>
        </select>
        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Pay Now</button>
    </form>
</body>
</html>
