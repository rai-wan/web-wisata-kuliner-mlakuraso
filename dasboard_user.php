<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: loginform.php'); // Redirect ke login jika belum login
    exit();
}

// Cek role pengguna
if ($_SESSION['role'] !== 'user') {
    header('Location: dasboard.php'); // Redirect ke dashboard admin jika bukan user
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="css/style_dasboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .logout-button {
            padding: 10px 15px;
            background-color: black; /* Warna merah untuk tombol logout */
            color: white; /* Warna teks putih */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .logout-button:hover {
            background-color: darkred; /* Warna lebih gelap saat hover */
        }
/* General styles */
/* Mengatur margin, padding, dan box model untuk semua elemen */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Mengatur gaya dasar body */
body {
    font-family: Arial, sans-serif;
    color: white;
    background-color:#FFC0CB; /* Warna latar belakang halaman */
}

/* Mengatur lebar maksimal kontainer */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Navbar */
/* Gaya dasar untuk navbar */
.navbar {
    background-color: #FFC0CB; /* Warna latar belakang navbar */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0;
}

/* Mengatur gaya kontainer di dalam navbar */
.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    padding: 0 20px;
}

/* Logo dalam navbar */
.navbar .logo {
    font-size: 28px;
    color: white;
    font-weight: bold;
    margin-right: 50px;
}

/* Mengatur gaya daftar menu di navbar */
.navbar ul {
    display: flex;
    list-style: none;
    flex-grow: 1;
}

/* Mengatur margin pada setiap item menu di navbar */
.navbar ul li {
    margin-right: 30px;
}

/* Mengatur gaya tautan pada item menu */
.navbar ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
}

/* Gaya tombol order pada navbar */
.navbar .order-button {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    padding: 10px 15px;
    font-size: 16px;
    margin-right: 20px;
}

/* Gaya ikon profil */
.navbar .profile-icon {
    width: 35px;
    height: 35px;
    border-radius: 50%; /* Membuat ikon berbentuk bulat */
}

/* Hero Section */
/* Bagian penyambutan utama di halaman */
.hero-section {
    text-align: center;
    background: url('utama.jpg') no-repeat center center/cover; /* Latar belakang gambar */
    padding: 100px 20px;
    color: white;
    position: relative; /* Untuk overlay */
}

/* Overlay gelap pada hero section */
.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

/* Posisi teks penyambutan di atas overlay */
.welcome-text, .order-tips {
    position: relative;
    z-index: 2;
}

/* Gaya teks selamat datang */
.welcome-text h2 {
    font-family: 'Comic Sans MS', sans-serif;
    font-size: 40px;
    margin-bottom: 10px;
}

.welcome-text p {
    font-size: 20px;
    margin-bottom: 30px;
}

/* Gaya pesan singkat pada bagian hero */
.order-tips p {
    background-color: #c7b9ae;
    padding: 10px;
    border-radius: 10px;
    display: inline-block;
    margin: 5px;
}

/* Icon Section */
/* Bagian ikon untuk navigasi cepat */
.icon-section {
    background-color: #f0ece6;
    padding: 40px 0;
}

/* Gaya kontainer di dalam icon section */
.icon-section .container {
    display: flex;
    justify-content: space-between;
}

/* Gaya setiap ikon di dalam icon section */
.icon-section .icon {
    text-align: center;
    width: 20%;
}

/* Gaya gambar ikon */
.icon-section .icon img {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
}
.icon-section .icon a {
    text-decoration: none; /* Menghilangkan garis bawah pada tautan */
}
/* Gaya teks di bawah ikon */
.icon-section .icon p {
    margin-top: 5px;
    font-size: 16px;
    font-family: 'Comic Sans MS', sans-serif;
    color: #333; /* Ganti dengan warna yang diinginkan */
    text-shadow: 1px 1px 2px rgba(246, 246, 246, 0.2); /* Bayangan teks */
    line-height: 1.5; /* Jarak antar baris */
    letter-spacing: 0.5px; /* Ruang antar huruf */
}
.icon-section .icon p:hover {
    color: #ff6347; /* Warna teks saat hover (contoh: tomato) */
    transform: translateY(-2px); /* Efek mengangkat teks saat hover */
    text-shadow: 0 2px 5px rgba(239, 207, 207, 0.4); /* Bayangan teks lebih kuat saat hover */
}
.icon-section .icon img:hover {
    transform: scale(1.1); /* Efek zoom saat hover */
}

/* Menu Card Section */
/* Bagian kartu menu */
.menu-section {
    background-color: #f2e1df;
    padding: 40px 0;
}

/* Gaya kontainer dalam menu section */
.menu-section .container {
    display: flex;
    justify-content: space-around;
}

/* Gaya setiap kartu menu */
.menu-card {
    background-color: #a98686;
    width: 200px;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
}

/* Gaya gambar dalam kartu menu */
.menu-card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

/* Gaya judul pada kartu menu */
.menu-card .menu-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Gaya tombol order pada kartu menu */
.menu-card .order-button {
    background-color:rgb(255, 255, 255);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 10px;
}

/* Kontainer untuk ikon like dan dislike */
.menu-card .icons {
    display: flex;
    justify-content: space-around;
}

/* Gaya ikon like dan dislike */
.menu-card .icons img {
    width: 25px;
    height: 25px;
}

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">MLAKURASO</div>
            <ul>
                <li><a href="trending_user.php">Rekomendasi</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="#">Kategori</a></li>
            </ul>
            <form action="logout.php" method="POST">
                <button type="submit" class="logout-button">Logout</button> <!-- Tombol Logout -->
            </form>
            <img src="img/profil_foto.jpg" alt="Profile Icon" class="profile-icon">
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('img/utama.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="welcome-text">
                <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
                <p>Discover Your Next Culinary Adventure!</p>
            </div>
            <div class="order-tips">
                <p>lapar ga sih?!</p>
                <p>buruan order</p>
                <p>ada event menarik nih!!</p>
            </div>
        </div>
    </section>

    <!-- Icon Section -->
    <section class="icon-section">
        <div class="container">
            <div class="icon">
                <a href="tempat_makan_user.php">
                    <img src="img/rumah_makan.png" alt="Tempat Makan">
                    <p>Tempat makan</p>
                </a>
            </div>
            <div class="icon">
                <a href="event_user.php">
                    <img src="img/event.png" alt="Event">
                    <p>Event</p>
                </a>
            </div>
            <div class="icon">
                <a href="trending_user.php">
                    <img src="img/trending.png" alt="Trending">
                    <p>Trending</p>
                </a>
            </div>
            <div class="icon">
                <a href="favorit_user.php">
                    <img src="img/love.png" alt="Favorit">
                    <p>Favorit</p>
                </a>
            </div>
            <div class="icon">
                <a href="terdekat_user.php">
                    <img src="img/terdekat.png" alt="Terdekat">
                    <p>Terdekat</p>
                </a>
            </div>
        </div>
    </section>

</body>
</html>