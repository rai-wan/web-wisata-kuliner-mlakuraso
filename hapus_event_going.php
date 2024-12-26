<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';

    if ($id) {
        $query = "DELETE FROM event_going WHERE id='$id'";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Event berhasil dihapus!'); window.location='event_going.php';</script>";
        } else {
            echo "Gagal menghapus event: " . mysqli_error($koneksi);
        }
    } else {
        echo "<script>alert('ID tidak valid!'); window.location='event_going.php';</script>";
    }
} else {
    header('Location: event_going.php');
}