<?php

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style/style_terdekat.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Wisata Terdekat</title>
    <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

<!-- Custom Tailwind Config (opsional) -->
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          comic: ['"Comic Sans MS"', 'cursive']
        },
        colors: {
          pinksoft: '#fce4ec',
          pinkaccent: '#f8bbd0',
          pinkbtn: '#f06292',
          pinkhover: '#ec407a'
        }
      }
    }
  }
</script>

</head>
<body>
    <!-- Header -->
    <div class="logo">
        <a href="dasboard.php">>>────୨Mlakurasoৎ────<<</a>
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
                <img src="image/Welcome_to_Batam.JPG" alt="Welcome to Batam">
                <div class="card-body">
                    <h2 class="card-title">Welcome To Batam</h2>
                    <p class="card-text">Lokasi kuliner jajanan yang bersifat angkringan.</p>
                    <div class="alamat">Alun-alun Batam Centre</div>
                    <a href="https://www.google.com/maps/search/tempat+makan+batam+center/@1.1205647,104.0280237,13.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="image/nagoya.batam.JPG" alt="Nagoya Batam">
                <div class="card-body">
                    <h2 class="card-title">Nagoya Food Court</h2>
                    <p class="card-text">Restoran Jepang, Korea, Thailand, dan Western.</p>
                    <div class="alamat">Lubuk Baja Kota</div>
                    <a href="https://www.google.com/maps/search/kuliner+nagoya/@1.1419497,104.0013267,14.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card">
                <img src="image/harbourbay.batam.JPEG" alt="Harbour Bay">
                <div class="card-body">
                    <h2 class="card-title">Harbour Bay</h2>
                    <p class="card-text">Deretan restoran hidangan laut segar.</p>
                    <div class="alamat">Harbourbay Jodoh</div>
                    <a href="https://www.google.com/maps/search/kuliner+harbour+bay/@1.1420218,104.0013267,14z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card">
                <img src="image/jembatan-barelang.JPEG" alt="Jembatan Barelang">
                <div class="card-body">
                    <h2 class="card-title">Jembatan Barelang</h2>
                    <p class="card-text">Aneka kuliner khas melayu.</p>
                    <div class="alamat">Trans Barelang</div>
                    <a href="https://www.google.com/maps/search/kuliner+jembatan+barelang/@0.9761567,103.9623071,12.25z?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn">Lihat di Peta</a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card">
                <img src="image/tanjung-piayu-laut.JPG" alt="Tanjung Piayu Laut">
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
