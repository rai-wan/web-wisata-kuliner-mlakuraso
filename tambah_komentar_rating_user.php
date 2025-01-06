<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tempat_makan = $_POST['id_tempat_makan'];
    $komentar = $_POST['komentar'];
    $rating = $_POST['rating'];

    // Simpan komentar dan rating ke database
    $query = "INSERT INTO komentar_rating (id_tempat_makan, komentar, rating) VALUES ('$id_tempat_makan', '$komentar', '$rating')";
    if (mysqli_query($koneksi, $query)) {
        // Update status trending
        if ($rating == 5) {
            // Jika rating 5, tidak mengubah status trending
            // Anda bisa menambahkan logika lain jika diperlukan
        } elseif ($rating == 1) {
            // Jika rating 1, tidak ada perubahan status trending
            // Tidak melakukan apa-apa
        } else {
            // Jika rating di antara 2 dan 4, bisa ditambahkan logika lain jika diperlukan
        }

        header("Location: tempat_makan_user.php?message=Komentar dan rating berhasil dikirim.");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>