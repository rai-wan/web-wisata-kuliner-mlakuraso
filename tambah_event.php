<?php
include 'koneksi.php';

// Pastikan untuk memeriksa apakah data POST tersedia
if (isset($_POST['nama']) && isset($_POST['lokasi']) && isset($_POST['waktu'])) {
    // Ambil data dari POST
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $waktu = $_POST['waktu'];

    // Sanitasi input untuk mencegah SQL Injection
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $lokasi = mysqli_real_escape_string($koneksi, $lokasi);
    $waktu = mysqli_real_escape_string($koneksi, $waktu);

    // Query INSERT tanpa kolom id
    $input = mysqli_query($koneksi, "INSERT INTO event (nama, lokasi, waktu) VALUES('$nama', '$lokasi', '$waktu')") or die (mysqli_error($koneksi));

    // Cek apakah input berhasil
    if ($input) {
        echo "<script>
        alert('Data Berhasil Disimpan');
        window.location.href = 'event.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Menyimpan Data');
        window.location.href = 'event.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Data tidak lengkap');
    window.location.href = 'event.php';
    </script>";
}
?>