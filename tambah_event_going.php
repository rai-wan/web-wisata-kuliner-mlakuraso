<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $lokasi = $_POST['lokasi'] ?? '';

    // Validasi input
    if (empty($nama) || empty($tanggal) || empty($lokasi)) {
        echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
        exit;
    }

    // Upload Gambar
    if (isset($_FILES['gambar']['name']) && $_FILES['gambar']['name'] !== '') {
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar);

        // Pastikan direktori uploads ada
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            $query = "INSERT INTO event_going (nama, lokasi, tanggal, gambar) VALUES ('$nama', '$lokasi', '$tanggal', '$gambar')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Tempat makan berhasil ditambahkan!'); window.location='event_going.php';</script>";
            } else {
                echo "Gagal menambahkan data: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "<script>alert('Gambar tidak ditemukan.'); window.history.back();</script>";
    }
}
?>