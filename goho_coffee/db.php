<?php
$conn = new mysqli("localhost", "root", "", "goho_coffee");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
