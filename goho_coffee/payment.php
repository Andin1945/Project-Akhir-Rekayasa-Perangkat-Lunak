<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $table_number = $_POST['table_number'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    $insert = $conn->query("INSERT INTO pembayaran (customer_name, table_number, amount, payment_method, payment_status) 
    VALUES ('$customer_name', '$table_number', '$amount', '$payment_method', 'Completed')");

    if ($insert) {
        // Langsung tampilkan halaman sukses
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Payment Success</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-green-100 flex items-center justify-center min-h-screen">
            <div class="text-center bg-white p-10 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold text-green-600 mb-6 animate-pulse">Payment Successful!</h1>
                <div class="space-x-4">
                    <a href="checkout.php" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Order Again</a>
                    <a href="logout.php" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Logout</a>
                </div>
            </div>
        </body>
        </html>
        ';
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
