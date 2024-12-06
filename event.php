<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link rel="stylesheet" href="css/style_event.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
    <script>
        function showContent(contentId) {
            const contents = document.querySelectorAll('.rule-item');
            contents.forEach(content => content.style.display = 'none');
            document.getElementById(contentId).style.display = 'flex';
        }

        function redirectToDashboard() {
            window.location.href = "dasboard.php"; // Change to your target page
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="title" onclick="redirectToDashboard()">MLAKURASO</div>
            </div>
            <div class="list-item" onclick="showContent('event-start')">
                <div class="icon"></div>
                <div class="text">Event</div>
            </div>
        </div>
        <div class="content">
            <div class="rules">
                <div id="event-start" class="rule-item" style="display: none;">
                    <div class="rule-title">Event Berlangsung</div>
                    <div class="card">
                        <img src="img/resize.png" class="card-img-top img-fluid" alt="Product 1">
                        <div class="card-body bg-light">
                            <h5 class="card-title">BAZAAR KULINER</h5>
                            <p class="card-text">Lokasi : PAKUBA</p>
                            <p class="card-text">Tanggal : 10-13 Oktober 2024</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produk1">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/gambar1.png" class="card-img-top img-fluid" alt="Product 2">
                        <div class="card-body bg-light">
                            <h5 class="card-title">FOOD FESTIVAL</h5>
                            <p class="card-text">Lokasi : BTC</p>
                            <p class="card-text">Tanggal : 16-20 Oktober 2024</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produk2">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/gambar3.png" class="card-img-top img-fluid" alt="Product 3">
                        <div class="card-body bg-light">
                            <h5 class="card-title">BAZAR KULINER</h5>
                            <p class="card-text">Lokasi : Night market Tiban</p>
                            <p class="card-text">Tanggal : 10-13 Oktober 2024</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produk3">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/gambar2.png" class="card-img-top img-fluid" alt="Product 4">
                        <div class="card-body bg-light">
                            <h5 class="card-title">PESTA RAKYAT</h5>
                            <p class="card-text">Lokasi : Harbour bay</p>
                            <p class="card-text">Tanggal : 27 Nov-30 December 2024</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produk4">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 p-5 pt-2"></div>
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                    <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA EVENT
                </button>
                <!-- modal tambah data -->
                <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <form action="tambah_event.php" method="POST">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu" class="form-label">waktu</label>
                                        <input type="date" class="form-control" id="waktu" name="waktu" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 p-5 pt-2">
                    <h3><i class="fas fa-user-graduate me-2"></i> Daftar Event Cooming soon</h3>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">LOKASI</th>
                                <th scope="col">WAKTU</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * FROM event");
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['lokasi']; ?></td>
                                    <td><?php echo $data['waktu']; ?></td>
                                    <td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
