<?php
include 'koneksi.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM event_going WHERE nama LIKE '%$search%'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Berlangsung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
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
            max-height: 200px;
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
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .logo a {
            text-decoration: none;
            color: inherit;
        }

        .btn-primary {
            background-color: #f06292;
            border-color: #f06292;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #ec407a;
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
    </style>
</head>

<body>
    <div class="logo">
        <a href="dasboard_owner.php">>>────୨Mlakurasoৎ────<<</a>
    </div>

    <div class="container">
        <div class="search-container">
            <form method="GET" class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Cari nama event..." value="<?= htmlspecialchars($search); ?>">
                <button type="submit" class="btn btn-primary">🔍</button>
            </form>
        </div>

        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="uploads/<?= htmlspecialchars($data['gambar']); ?>" class="card-img-top" alt="<?= htmlspecialchars($data['nama']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($data['nama']); ?></h5>
                                <p class="card-text"><?= htmlspecialchars($data['tanggal']); ?></p>
                                <a href="<?= htmlspecialchars($data['lokasi']); ?>" target="_blank" class="btn btn-primary btn-sm">Lihat di Google Maps</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p class="text-center">Tidak ada event yang ditemukan.</p>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>