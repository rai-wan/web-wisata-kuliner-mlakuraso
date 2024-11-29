<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (fullname, username, gender, email, password)
            VALUES ('$fullname', '$username', '$gender', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: loginform.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
