<?php
require 'koneksi.php'; // Pastikan koneksi berhasil di sini
$username = $_POST["username"];
$password = $_POST["password"];

// Menggunakan prepared statement untuk keamanan
$query_sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($conn, $query_sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    header("Location: dasboard.php");
    exit();
} else {
    echo "<center><h1>Username atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='loginform.php'>Login</a></strong></button></center>";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
