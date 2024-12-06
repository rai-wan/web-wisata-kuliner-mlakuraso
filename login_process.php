<?php
session_start();
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);
    $data = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_array($data);
    if (mysqli_num_rows($data) >0) {
        $_SESSION['username'] = $row['username'];
        header('Location: dasboard.php');
        exit();
    } else {
        $error = 'Username atau password salah.';
    }
}
?>
