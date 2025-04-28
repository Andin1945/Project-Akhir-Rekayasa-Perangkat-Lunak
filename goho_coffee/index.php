<?php
include 'db.php';
// Ini contoh menu
$menus = [
    ['name' => 'Espresso', 'price' => 20000],
    ['name' => 'Cappuccino', 'price' => 25000],
    ['name' => 'Latte', 'price' => 23000],
    ['name' => 'Americano', 'price' => 21000],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goho Coffee - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-6">

    <!-- Header -->
    <header class="text-center my-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Welcome to Goho Coffee</h1>
        <p class="text-gray-500 text-lg">Choose your favorite coffee</p>
    </header>

    <!-- Menu List -->
    <form action="checkout.php" method="POST" class="w-full max-w-4xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($menus as $menu): ?>
                <label class="block bg-white rounded-xl shadow hover:shadow-lg transition p-6 cursor-pointer">
                    <div class="flex flex-col items-start">
                        <div class="flex items-center mb-4">
                            <input type="checkbox" name="menus[]" value="<?= $menu['name'] ?>" class="h-5 w-5 text-blue-600 focus:ring-blue-500 rounded mr-3">
                            <span class="text-lg font-semibold text-gray-800"><?= $menu['name'] ?></span>
                        </div>
                        <div class="text-gray-500 text-sm">
                            Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                        </div>
                    </div>
                </label>
            <?php endforeach; ?>
        </div>

        <!-- Order Button -->
        <div class="text-center mt-8">
            <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-full text-lg font-semibold hover:bg-blue-700 transition">Order Now</button>
        </div>
    </form>

</body>
</html>
