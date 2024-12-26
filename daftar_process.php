<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $query = "INSERT INTO users (fullname, username, gender, password, role) VALUES ('$fullname', '$username', '$gender', '$password', '$role')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect ke login.php setelah berhasil mendaftar
        header('Location: loginform.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
