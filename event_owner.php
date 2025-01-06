<?php
include 'koneksi.php';

$query = "SELECT * FROM event"; // Ganti 'events' dengan nama tabel yang sesuai
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Event - Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/background.jpg'); /* Ganti dengan path gambar yang sesuai */
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
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .table-container {
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang transparan */
            border-radius: 15px;
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
        }

        .table {
            color: #333; /* Warna teks tabel */
        }

        .table th, .table td {
            text-align: center;
        }

        .btn {
            background-color: #f06292;
            color: white;
        }

        .btn:hover {
            background-color: #ec407a;
        }

        .event-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            font-size: 16px;
        }
        .logo {
            font-family: 'Comic Sans MS', sans-serif;
            text-align: center; /* Menyelaraskan teks ke tengah */
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px; /* Menambahkan jarak di bawah logo */
        }
        .logo a {
            text-decoration: none; /* Menghilangkan garis bawah pada tautan */
            color: inherit; /* Mengambil warna dari elemen induk */
        }
        .form-label {
        color: black; /* Mengubah warna tulisan label menjadi hitam */
    }
    </style>
</head>

<body>

<body>
    <div class="logo">
        <a href="dasboard_owner.php">>>────୨Mlakurasoৎ────<<</a>
    </div>
    <h3 class="text-center">Daftar Event Coming Soon</h3>

    <a href="event_going_owner.php" class="btn btn-primary event-button">Event Berlangsung</a> <!-- Tombol Event Berlangsung -->

    <div class="table-container"> <!-- Container untuk tabel -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($data['id']); ?></td>
                            <td><?= htmlspecialchars($data['nama']); ?></td>
                            <td><?= htmlspecialchars($data['lokasi']); ?></td>
                            <td><?= htmlspecialchars($data['waktu']); ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="5">Tidak ada event yang ditemukan.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>