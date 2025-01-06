<?php
include 'koneksi.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM tempat_makan WHERE nama_tempat LIKE '%$search%'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Tempat Makan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
         body {
    background-image: url('img/background.jpg');
    /* Ganti dengan path gambar */
    background-size: cover;
    /* Membuat gambar memenuhi layar */
    background-position: center center;
    /* Memusatkan gambar */
    background-attachment: fixed;
    /* Efek parallax */
    font-family: 'Arial', sans-serif;
    color: #fff;
}

h2 {
    font-family: 'Comic Sans MS', sans-serif;
    color: #fff;
    font-size: 36px;
    margin-bottom: 30px;
    text-align: center;
    text-transform: uppercase;
}

.card {
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    background-color: #fff;
    color: #333;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    height: 200px;
    /* Adjusted image size */
    object-fit: cover;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-weight: bold;
    font-size: 20px;
    color: #333;
}

.card-text {
    font-size: 14px;
    color: #777;
}

.logo {
    font-family: 'Comic Sans MS', sans-serif;
    text-align: center;
    /* Menyelaraskan teks ke tengah */
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
    /* Menambahkan jarak di bawah logo */
}

.logo a {
    text-decoration: none;
    /* Menghilangkan garis bawah pada tautan */
    color: inherit;
    /* Mengambil warna dari elemen induk */
}

.btn-primary {
    background-color: #f06292;
    /* Pink button */
    border-color: #f06292;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #ec407a;
    /* Darker pink hover */
    border-color: #ec407a;
}

.container {
    max-width: 1200px;
}

.search-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.search-container .input-group {
    width: 70%;
}

.search-container .btn-search {
    background-color: #f06292;
    border-color: #f06292;
    font-size: 16px;
    padding: 12px 20px;
    border-radius: 30px;
    font-weight: bold;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.search-container .btn-search:hover {
    background-color: #ec407a;
    /* Darker pink on hover */
    border-color: #ec407a;
    box-shadow: 0 4px 12px rgba(236, 64, 122, 0.3);
    /* Soft hover shadow */
}

input[type="text"] {
    border-radius: 30px;
    padding: 15px;
    font-size: 16px;
    height: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #f06292;
}

input[type="text"]:focus {
    outline: none;
    border-color: #ec407a;
    box-shadow: 0 4px 10px rgba(236, 64, 122, 0.5);
}

.btn-success {
    background-color: #ff80ab;
    border-color: #ff80ab;
    font-weight: bold;
    font-size: 14px;
    border-radius: 30px;
}

.btn-success:hover {
    background-color: #ff4081;
    border-color: #ff4081;
}

.modal-header {
    background-color: #f06292;
    color: white;
}

.modal-body {
    color: black;
}

.modal-body label {
    font-family: 'Comic Sans MS', sans-serif;
    font-weight: bold;
    color: black;
}

.modal-body input,
.modal-body textarea {
    font-family: 'Arial', sans-serif;
    color: black;
}

.modal-footer button {
    color: black;
}

.modal-footer {
    border-top: none;
}

.form-control {
    border-radius: 10px;
}

.card img {
    max-height: 200px;
    object-fit: cover;
}
    </style>
</head>

<body>

    <div class="logo">
    <a href="dasboard_owner.php">>>────୨Mlakurasoৎ────<<</a>
    </div>

    <div class="search-container">
        <form method="GET" class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Cari nama tempat makan..." value="<?= htmlspecialchars($search); ?>">
            <button type="submit" class="btn btn-search">🔍</button>
        </form>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Tempat Makan</button>
    </div>

    <!-- Modal Tambah Tempat Makan -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Tempat Makan</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah_tempat_makan_owner.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat</label>
                            <input type="text" class="form-control" name="nama_tempat" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <div class="form-group">
                            <label for="link_google_map">Link Google Map</label>
                            <input type="text" class="form-control" name="link_google_map" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

                            <!-- Tombol Tandai Favorit -->
                            <form action="tandai_favorit_owner.php" method="POST" class="d-inline mt-2">
                                <input type="hidden" name="id_tempat_makan" value="<?= $data['id']; ?>">
                                <button type="submit" class="btn btn-warning btn-sm">
                                    <?php if ($data['favorit']): ?>
                                        ⭐ Favorit
                                    <?php else: ?>
                                        ☆ Tandai Favorit
                                    <?php endif; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p class="text-center">Tidak ada tempat makan yang ditemukan.</p>
        <?php } ?>
    </div>

    <!-- Modal dan Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>