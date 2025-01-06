<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_tempat = $_POST['nama_tempat'];
    $deskripsi = $_POST['deskripsi'];
    $link_google_map = $_POST['link_google_map'];

    // Upload Gambar
    if (isset($_FILES['gambar']['name']) && $_FILES['gambar']['name'] !== '') {
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar);

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            $query = "INSERT INTO tempat_makan (nama_tempat, deskripsi, gambar, link_google_map)
                    VALUES ('$nama_tempat', '$deskripsi', '$gambar', '$link_google_map')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Tempat makan berhasil ditambahkan!'); window.location='tempat_makan_owner.php';</script>";
            } else {
                echo "Gagal menambahkan data: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    }
}
?>