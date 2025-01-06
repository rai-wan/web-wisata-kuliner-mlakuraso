<?php
include 'koneksi.php';

// Cek jika ada permintaan untuk menghapus favorit
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $updateQuery = "UPDATE tempat_makan SET favorit = 0 WHERE id = $id";
    mysqli_query($koneksi, $updateQuery);
}

// Ambil data tempat makan favorit
$query = "SELECT * FROM tempat_makan WHERE favorit = 1";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Makan Favorit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
            background-size: cover;
            background-position: center;
            color: white;
        }
        .header {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
            text-align: center;
        }
        .container {
            font-family: 'Comic Sans MS', sans-serif;
            margin-top: 80px; /* Menyesuaikan margin atas untuk konten */
        }
        .logo {
            font-family: 'Comic Sans MS', sans-serif;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .logo a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
<div class="logo">
    <a href="dasboard_owner.php">>>────୨Mlakurasoৎ────<<</a>
</div>
<div class="container">
    <h2 class="text-center">Tempat Makan Favorit</h2>
    <div class="row">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="uploads/<?= htmlspecialchars($data['gambar']); ?>" class="card-img-top" alt="<?= htmlspecialchars($data['nama_tempat']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($data['nama_tempat']); ?></h5>
                            <p class="card-text"><?= htmlspecialchars($data['deskripsi']); ?></p>
                            <a href="<?= htmlspecialchars($data['link_google_map']); ?>" target="_blank" class="btn btn-primary btn-sm">Lihat di Google Maps</a>
                            <a href="?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm mt-2">Hapus dari Favorit</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p class="text-center">Tidak ada tempat makan favorit ditemukan.</p>
        <?php } ?>
    </div>
</div>
</body>
</html>