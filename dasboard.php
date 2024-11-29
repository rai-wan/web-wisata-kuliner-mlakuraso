<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mlakuraso Dashboard</title>
    <!-- Menyertakan stylesheet untuk mengatur gaya halaman -->
    <link rel="stylesheet" href="css/style_dasboard.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <!-- Nama logo aplikasi -->
            <div class="logo">MLAKURASO</div>
            <!-- Menu navigasi untuk pengguna -->
            <ul>
                <li><a href="#">Rekomendasi</a></li> <!-- Tautan menuju halaman Rekomendasi -->
                <li><a href="event.php">Event</a></li> <!-- Tautan menuju halaman Event -->
                <li><a href="#">Kategori</a></li> <!-- Tautan menuju halaman Kategori -->
            </ul>
            <!-- Tombol untuk melakukan order -->
            <button class="order-button">Order Now</button>
            <!-- Ikon profil pengguna -->
            <img src="img/profil_foto.jpg" alt="Profile Icon" class="profile-icon">
        </div>
    </nav>

    <!-- Hero Section (Bagian Penyambutan) -->
<section class="hero-section" style="background-image: url('img/utama.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="welcome-text">
            <!-- Teks penyambutan pengguna -->
            <h2>Welcome to Mlakuraso</h2>
            <p>Discover Your Next Culinary Adventure!</p>
        </div>
        <div class="order-tips">
            <!-- Pesan-pesan singkat untuk memotivasi pengguna melakukan order -->
            <p>lapar ga sih?!</p>
            <p>buruan order</p>
            <p>ada event menarik nih!!</p>
        </div>
    </div>
</section>

    <!-- Icon Section (Bagian Ikon Navigasi) -->
    <section class="icon-section">
        <div class="container">
            <!-- Ikon tempat makan -->
            <div class="icon">
                <a href="tempat_makan.php">
                    <img src="img/rumah_makan.png" alt="Tempat Makan">
                    <p>Tempat makan</p>
                </a>
            </div>
            <!-- Ikon event -->
            <div class="icon">
                <a href="event.php">
                    <img src="img/event.png" alt="Event">
                    <p>Event</p>
                </a>
            </div>
            <!-- Ikon trending -->
            <div class="icon">
                <a href="trending.php">
                    <img src="img/trending.png" alt="Trending">
                    <p>Trending</p>
                </a>
            </div>
            <!-- Ikon favorit -->
            <div class="icon">
                <a href="favorit.html">
                    <img src="img/love.png" alt="Favorit">
                    <p>Favorit</p>
                </a>
            </div>
            <!-- Ikon tempat terdekat -->
            <div class="icon">
                <a href="terdekat.php">
                    <img src="img/terdekat.png" alt="Terdekat">
                    <p>Terdekat</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Menu Card Section (Bagian Kartu Menu) -->
    <section class="menu-section">
        <div class="container">
            <div class="menu-card">
                <!-- Gambar dari menu kuliner -->
                <img src="img/sate.jpg" alt="Sate Pak Budi">
                <!-- Judul dari menu kuliner -->
                <p class="menu-title">Sate Pak Budi</p>
                <!-- Tombol order untuk menu ini -->
                <button class="order-button">Order</button>
                <div class="icons">
                    <!-- Ikon untuk memberikan like -->
                    <img src="img/like.webp" alt="Like">
                    <!-- Ikon untuk memberikan dislike -->
                    <img src="img/dislike.jpg" alt="Dislike">
                </div>
            </div>
            <!-- Tambahkan lebih banyak kartu menu sesuai kebutuhan -->
        </div>
    </section>

</body>
</html>
