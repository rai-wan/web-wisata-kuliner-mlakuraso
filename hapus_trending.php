<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tempat_makan = $_POST['id_tempat_makan'];

    // Query untuk mengupdate status trending menjadi 0
    $query = "UPDATE tempat_makan SET trending = 0 WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_tempat_makan);

    if ($stmt->execute()) {
        // Redirect kembali ke halaman trending setelah berhasil
        header("Location: trending.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>