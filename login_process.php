<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lindungi dari SQL Injection
    $user = mysqli_real_escape_string($koneksi, $username);

    // Mengambil data pengguna termasuk role
    $query = "SELECT * FROM users WHERE username='$user'";
    $data = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($data) > 0) {
        $row = mysqli_fetch_array($data);

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role']; // Menyimpan role di session

            // Redirect berdasarkan role
            if ($_SESSION['role'] === 'admin') {
                header('Location: dasboard.php');
            } else {
                header('Location: dasboard_user.php');
            }
            exit();
        } else {
            $error = 'Username atau password salah.';
        }
    } else {
        $error = 'Username atau password salah.';
    }
}
?>
