<?php
// koneksi.php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mlakuraso';

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
?>
