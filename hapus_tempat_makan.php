<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tempat_makan = $_POST['id_tempat_makan'];

    // Hapus gambar yang diupload (opsional, jika Anda ingin menghapus file gambar)
    $query = "SELECT gambar FROM tempat_makan WHERE id = '$id_tempat_makan'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        $gambar = $data['gambar'];
        if (file_exists("uploads/$gambar")) {
            unlink("uploads/$gambar"); // Menghapus file gambar
        }
    }

    // Hapus data dari database
    $query = "DELETE FROM tempat_makan WHERE id = '$id_tempat_makan'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: tempat_makan.php?message=Berhasil menghapus tempat makan.");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>