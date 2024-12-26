<?php
include 'koneksi.php';

$id_tempat_makan = $_GET['id'];
$query = "SELECT * FROM tempat_makan WHERE id = '$id_tempat_makan'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_tempat = $_POST['nama_tempat'];
    $deskripsi = $_POST['deskripsi'];
    $link_google_map = $_POST['link_google_map'];

    // Jika ada gambar baru, upload dan hapus gambar lama
    if ($_FILES['gambar']['name']) {
        $gambar_lama = $data['gambar'];
        if (file_exists("uploads/$gambar_lama")) {
            unlink("uploads/$gambar_lama"); // Hapus gambar lama
        }

        $gambar_baru = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/$gambar_baru");
    } else {
        $gambar_baru = $data['gambar']; // Jika tidak ada gambar baru, gunakan gambar lama
    }

    // Update data di database
    $query = "UPDATE tempat_makan SET nama_tempat='$nama_tempat', deskripsi='$deskripsi', link_google_map='$link_google_map', gambar='$gambar_baru' WHERE id='$id_tempat_makan'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: tempat_makan.php?message=Berhasil mengedit tempat makan.");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tempat Makan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Tempat Makan</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_tempat" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" value="<?= htmlspecialchars($data['nama_tempat']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= htmlspecialchars($data['deskripsi']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="link_google_map" class="form-label">Link Google Map</label>
                <input type="url" class="form-control" id="link_google_map" name="link_google_map" value="<?= htmlspecialchars($data['link_google_map']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (kosongkan jika tidak ingin mengubah)</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="tempat_makan.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>