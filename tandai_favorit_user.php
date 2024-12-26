<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tempat_makan = $_POST['id_tempat_makan'];

    // Ambil status favorit saat ini
    $query = "SELECT favorit FROM tempat_makan WHERE id = '$id_tempat_makan'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    // Toggle status favorit
    $favorit = $data['favorit'] ? 0 : 1;

    // Update status favorit di database
    $query = "UPDATE tempat_makan SET favorit = '$favorit' WHERE id = '$id_tempat_makan'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: tempat_makan_user.php?message=Status favorit diperbarui.");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>