<?php

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style_terdekat.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Wisata Terdekat</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #fce4ec; /* Latar belakang pink muda */
    color: #333;
}

/* Header */
.logo {
            font-family: 'Comic Sans MS', sans-serif;
            text-align: center;
            color: white; /* Menyelaraskan teks ke tengah */
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px; /* Menambahkan jarak di bawah logo */
        }
        .logo a {
            text-decoration: none; /* Menghilangkan garis bawah pada tautan */
            color: inherit; /* Mengambil warna dari elemen induk */
        }

/* Hero Section */
.hero {
    text-align: center;
    padding: 40px 20px;
    background-color: #f8bbd0; /* Latar belakang hero */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.hero h1 {
    font-size: 36px;
    color: #d81b60; /* Warna judul */
}

.hero p {
    font-size: 18px;
    color: #880e4f; /* Warna teks deskripsi */
}

/* Main Content */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

.card {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    margin: 10px;
    overflow: hidden;
    width: 300px; /* Ukuran card */
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05); /* Efek hover */
}

.card img {
    width: 100%;
    height: 200px; /* Ukuran gambar */
    object-fit: cover;
}

.card-body {
    padding: 15px;
}

.card-title {
    font-size: 20px;
    color: #d81b60; /* Warna judul card */
}

.card-text {
    font-size: 14px;
    color: #555;
}
body {
    font-family: 'Arial', sans-serif;
    background-image: url('img/background.jpg'); /* Ganti dengan path gambar Anda */
    background-size: cover; /* Membuat gambar memenuhi layar */
    background-position: center; /* Memusatkan gambar */
    background-attachment: fixed; /* Efek parallax */
    color: #333; /* Warna teks */
}

/* Header, Hero Section, dan Card tetap sama */

.distance {
    font-weight: bold;
    color: #ec407a; /* Warna jarak */
}

.alamat {
    font-size: 12px;
    color: #777;
}

.btn {
    display: inline-block;
    background-color: #f06292; /* Warna tombol */
    color: #fff;
    padding: 10px 15px;
    border-radius: 20px;
    text-decoration: none;
    margin-top: 10px;
}

.btn:hover {
    background-color: #ec407a; /* Warna tombol saat hover */
}
</style>
</head>
<body>
    <!-- Header -->
    <div class="logo">
        <a href="dasboard_user.php">>>────୨Mlakurasoৎ────<<</a>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Wisata Kuliner Terdekat</h1>
            <p>Temukan tempat makan terbaik di sekitar Anda!</p>

    <!-- Main Content -->
    <main>
        <div class="container">
            <!-- Card 1 -->
            <div class="card">
                <img src="img/Welcome_to_Batam.JPG" alt="Welcome to Batam">
                <div class="card-body">
                    <h2 class="card-title">Welcome To Batam</h2>
                    <p class="card-text">Lokasi kuliner jajanan yang bersifat angkringan.</p>
                    <div class="alamat">Alun-alun Batam Centre</div>
                    <a href="https://www.google.com/maps/search/tempat+makan+batam+center/@1.1205647,104.0280237,13.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="img/nagoya.batam.JPG" alt="Nagoya Batam">
                <div class="card-body">
                    <h2 class="card-title">Nagoya Food Court</h2>
                    <p class="card-text">Restoran Jepang, Korea, Thailand, dan Western.</p>
                    <div class="alamat">Lubuk Baja Kota</div>
                    <a href="https://www.google.com/maps/search/kuliner+nagoya/@1.1419497,104.0013267,14.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <img src="img/harbourbay.batam.JPEG" alt="Harbour Bay">
                <div class="card-body">
                    <h2 class="card-title">Harbour Bay</h2>
                    <p class="card-text">Deretan restoran hidangan laut segar.</p>
                    <div class="alamat">Harbourbay Jodoh</div>
                    <a href="https://www.google.com/maps/search/kuliner+harbour+bay/@1.1420218,104.0013267,14z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card">
                <img src="img/jembatan-barelang.JPEG" alt="Jembatan Barelang">
                <div class="card-body">
                    <h2 class="card-title">Jembatan Barelang</h2>
                    <p class="card-text">Aneka kuliner khas melayu.</p>
                    <div class="alamat">Trans Barelang</div>
                    <a href="https://www.google.com/maps/search/kuliner+jembatan+barelang/@0.9761567,103.9623071,12.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card">
                <img src="img/tanjung-piayu-laut.JPG" alt="Tanjung Piayu Laut">
                <div class="card-body">
                    <h2 class="card-title">Tanjung Piayu Laut</h2>
                    <p class="card-text">Deretan restoran seafood yang lezat.</p>
                    <div class="alamat">Tanjung Piayu</div>
                    <a href="https://www.google.com/maps/search/kuliner+tanjung+piayu/@1.0440905,104.0312794,13.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
