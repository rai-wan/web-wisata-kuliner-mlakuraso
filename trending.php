<?php
include 'koneksi.php';

$query = "SELECT tm.*,
            (SELECT GROUP_CONCAT(cr.komentar SEPARATOR '<br>')
             FROM komentar_rating cr
             WHERE cr.id_tempat_makan = tm.id) AS komentar,
            (SELECT AVG(cr.rating)  -- Menghitung rata-rata rating
             FROM komentar_rating cr
             WHERE cr.id_tempat_makan = tm.id) AS average_rating
        FROM tempat_makan tm
        WHERE tm.trending = 1";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Makan Trending</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .container {
            font-family: 'Comic Sans MS', sans-serif;
            margin-top: 80px;
        }

        .card {
            margin-bottom: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card img {
            height: 200px;
            object-fit: cover;
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

        .comment-list {
            list-style-type: none;
            padding: 0;
        }

        .comment-list li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="logo">
        <a href="dasboard.php">>>────୨Mlakurasoৎ────<<</a>
    </div>
    <div class="container">
        <h2 class="text-center">Tempat Makan Trending</h2>
        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="uploads/<?php echo htmlspecialchars($data['gambar']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($data['nama_tempat']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($data['nama_tempat']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($data['deskripsi']); ?></p>
                                <p class="card-text"><strong>Rata-rata Rating: <?php echo number_format($data['average_rating'], 1); ?></strong></p> <!-- Menampilkan rata-rata rating -->
                                <a href="<?php echo htmlspecialchars($data['link_google_map']); ?>" target="_blank" class="btn btn-primary btn-sm">Lihat di Google Maps</a>
                                <h6 class="mt-3">Komentar:</h6>
                                <ul class="comment-list">
                                    <?php
                                    $komentarList = explode('<br>', $data['komentar']);
                                    if (!empty($data['komentar'])) {
                                        foreach ($komentarList as $komentar) {
                                            echo '<li>' . htmlspecialchars($komentar) . '</li>';
                                        }
                                    } else {
                                        echo '<li>Tidak ada komentar.</li>';
                                    }
                                    ?>
                                </ul>

                                <!-- Form Hapus dari Trending -->
                                <form action="hapus_trending.php" method="POST" class="d-inline">
                                    <input type="hidden" name="id_tempat_makan" value="<?php echo $data['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus tempat ini dari trending?')">Hapus dari Trending</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p class="text-center">Tidak ada tempat makan trending ditemukan.</p>
            <?php } ?>
        </div>
    </div>
</body>

</html>