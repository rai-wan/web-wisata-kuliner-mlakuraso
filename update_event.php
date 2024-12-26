<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_FILES['gambar']['name'];

    // Handle file upload logic here if needed...

    $query = "UPDATE event_going SET nama='$nama', lokasi='$lokasi', tanggal='$tanggal' WHERE id='$id'";
    if (!empty($gambar)) {
        // Update with new image
        $query = "UPDATE event_going SET nama='$nama', lokasi='$lokasi', tanggal='$tanggal', gambar='$gambar' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Event berhasil diperbarui!'); window.location='event_going.php';</script>";
    } else {
        echo "Gagal memperbarui event: " . mysqli_error($koneksi);
    }
} else {
    header('Location: event_going.php');
}