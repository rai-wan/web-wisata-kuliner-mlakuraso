<?php
// include database connection file
include 'koneksi.php';
    $id= $_GET['id'];
    $result = mysqli_query($koneksi, "DELETE FROM event WHERE id='$id'");
    // redirect to homepage to display updated user ip list
header("Location: event.php");
?>