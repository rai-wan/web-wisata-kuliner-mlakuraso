<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mlakuraso</title>
    <!-- Menyertakan stylesheet eksternal untuk halaman landing page -->
    <link rel="stylesheet" href="css/style_landing_page.css">
    <style>
        /* Simple styles for demonstration */
        body {
            font-family: Arial, sans-serif;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f8f8;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }
        .btn-primary, .btn-secondary {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <!-- Menampilkan logo atau judul utama -->
            <h1>MLAKURASO</h1>
        </div>
        <nav>
            <!-- Tautan navigasi untuk halaman utama -->
            <a href="#">home</a>
            <!-- Tautan menuju halaman makanan -->
            <a href="#">makanan</a>
            <!-- Tautan menuju halaman layanan atau servis -->
            <a href="#">service</a>
            <!-- Tautan menuju halaman event kuliner -->
            <a href="#">event kuliner</a>
        </nav>
    </header>

    <!-- Main Content (Konten Utama) -->
    <main>
        <div class="welcome-message">
            <!-- Pesan penyambutan pengguna -->


            <?php
                $pengunjung = "Food Lover";

                echo'<h2>Halo,'. $pengunjung .' selamat datang</h2>
                <p>Temukan makanan favoritmu disini, masuki dunia kuliner tanpa batas</p>
                <p>Jelajahi dunia kuliner Nusantara dan event-event menarik lainnya</p>';
            ?>



            <div class="button-group">
                <!-- Tombol utama untuk mengarahkan ke halaman masuk (Masuk) -->
                <!-- Tombol sekunder untuk mengarahkan ke halaman login -->
                <button class="btn-secondary" onclick="navigateTo('loginform.php')">Login</button>
            </div>
        </div>
        <div class="illustration">
            <!-- Gambar ilustrasi halaman -->
            <img src="img/rumah_makan.png" alt="Illustration">
        </div>
    </main>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
