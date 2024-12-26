<?php
// include database connection file
include 'koneksi.php';
    $id= $_POST['id'];
    $nama= $_POST['nama'];
    $lokasi= $_POST['lokasi'];
    $waktu= $_POST['waktu'];
    $result = mysqli_query($koneksi, "UPDATE event SET nama='$nama',lokasi='$lokasi',waktu='$waktu' WHERE id='$id'");
    // redirect to homepage to display updated user ip list
header("Location: event.php");
?>