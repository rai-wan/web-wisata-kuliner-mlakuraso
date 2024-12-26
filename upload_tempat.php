<?php
require_once 'koneksi.php'; // Koneksi ke database

// Proses unggah data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_tempat'] ?? '';
    $lokasi = $_POST['lokasi_tempat'] ?? '';
    $gambar = $_FILES['gambar_tempat'] ?? null;

    // Validasi data
    if (!empty($nama) && !empty($lokasi) && $gambar) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($gambar['name']);

        // Cek dan buat folder jika belum ada
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Pindahkan file gambar
        if (move_uploaded_file($gambar['tmp_name'], $uploadFile)) {
            // Simpan data ke database
            $query = "INSERT INTO tempat_makan (nama_tempat, lokasi, gambar) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sss', $nama, $lokasi, $uploadFile);

            if ($stmt->execute()) {
                echo "<p>Tempat makan berhasil ditambahkan!</p>";
            } else {
                echo "<p>Gagal menyimpan data ke database.</p>";
            }
        } else {
            echo "<p>Gagal mengunggah gambar.</p>";
        }
    } else {
        echo "<p>Harap isi semua kolom.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Makan</title>
    <link rel="stylesheet" href="css/style_tempat_makan.css">
</head>
<body>
    <div class="header">────୨Mlakurasoৎ────</div>

    <h1>Tambah Tempat Makan</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_tempat">Nama Tempat:</label><br>
        <input type="text" id="nama_tempat" name="nama_tempat" required><br><br>

        <label for="lokasi_tempat">Lokasi:</label><br>
        <input type="text" id="lokasi_tempat" name="lokasi_tempat" required><br><br>

        <label for="gambar_tempat">Gambar:</label><br>
        <input type="file" id="gambar_tempat" name="gambar_tempat" accept="image/*" required><br><br>

        <button type="submit">Tambah Tempat</button>
    </form>

    <a href="index.php">Kembali ke Beranda</a>
</body>
</html>
