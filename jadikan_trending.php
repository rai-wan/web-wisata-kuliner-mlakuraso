<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tempat_makan = $_POST['id_tempat_makan'];

    // Update query untuk menandai tempat makan sebagai trending
    $query = "UPDATE tempat_makan SET trending = 1 WHERE id = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_tempat_makan);

    if ($stmt->execute()) {
        // Redirect kembali ke tempat makan setelah berhasil
        header("Location: tempat_makan.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>