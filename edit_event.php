<?php
include 'koneksi.php';

$id = $_GET['id'] ?? '';
$query = "SELECT * FROM event_going WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Event</h2>
        <form action="update_event.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Link Google Maps</label>
                <input type="url" class="form-control" id="lokasi" name="lokasi" value="<?= htmlspecialchars($data['lokasi']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= htmlspecialchars($data['tanggal']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>