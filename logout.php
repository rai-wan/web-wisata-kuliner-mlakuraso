<?php
session_start(); // Memulai sesi
session_destroy(); // Menghentikan sesi
header("Location: index.php"); // Arahkan kembali ke halaman login
exit();
?>