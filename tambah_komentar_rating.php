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
            $query = "UPDATE tempat_makan SET trending = 1 WHERE id = '$id_tempat_makan'";
            mysqli_query($koneksi, $query);
        } elseif ($rating == 1) {
            // Jika rating 1, hapus status trending
            $query = "UPDATE tempat_makan SET trending = 0 WHERE id = '$id_tempat_makan'";
            mysqli_query($koneksi, $query);
        } else {
            // Jika rating di antara 2 dan 4, bisa ditambahkan logika lain jika diperlukan
        }

        header("Location: tempat_makan.php?message=Komentar dan rating berhasil dikirim.");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>