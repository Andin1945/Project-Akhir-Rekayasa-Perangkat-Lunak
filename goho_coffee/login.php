<?php
session_start();
include 'db.php';
if(isset($_POST['login'])){
    $name = $_POST['name'];
    $role = $_POST['role'];
    if($role == 'admin'){
        $_SESSION['admin'] = true;
        header('Location: admin/dashboard.php');
    } else {
        $_SESSION['customer'] = true;
        $_SESSION['name'] = $name;
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Goho Coffee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="post" class="bg-white p-10 rounded shadow-md w-80">
        <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
        <input type="text" name="name" placeholder="Nama" required class="block w-full mb-4 p-2 border rounded" />
        <select name="role" required class="block w-full mb-6 p-2 border rounded">
            <option value="">Pilih Role</option>
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" name="login" class="bg-blue-500 text-white w-full py-2 rounded">Login</button>
    </form>
</body>
</html>
