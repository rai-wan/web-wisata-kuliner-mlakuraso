<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil dan mensanitasi input pengguna
    $fullname = mysqli_real_escape_string($koneksi, $_POST['fullname']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $gender = mysqli_real_escape_string($koneksi, $_POST['gender']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);


    // Hash password untuk keamanan

    // Query untuk menyimpan data pengguna ke dalam database
    $query = "INSERT INTO users (fullname, username, gender, email,  password) VALUES ('$fullname', '$username', '$gender', '$email', '$password')";
    $data = mysqli_query($koneksi, $query);

    if ($data) {
        // Pendaftaran berhasil
        $_SESSION['username'] = $username;  // Simpan username di session
        header('Location: loginform.php');  // Arahkan ke halaman login
        exit();
    } else {
        // Penanganan kesalahan
        $error = 'Pendaftaran gagal. Error: ' ;
    }
}
