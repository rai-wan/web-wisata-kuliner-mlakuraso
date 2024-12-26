<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/background.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Menutupi seluruh latar belakang */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            color: white; /* Mengubah warna teks menjadi putih untuk kontras */
        }
        .table-container {
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang putih transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <div class="logo">
        <a href="dasboard.php">>>────୨Mlakurasoৎ────<<</a>
    </div>

    <div class="container mt-5">
        <div class="table-container">
            <h3 class="text-center mb-4"><i class="fas fa-user-graduate me-2"></i> Daftar Event Coming Soon</h3>
            <div class="d-flex justify-content-between mb-3">
                <a href="event_going.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Event Berlangsung
                </a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                    <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA EVENT
                </button>
            </div>

            <!-- Modal Tambah Data -->
            <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
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
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="date" class="form-control" id="waktu" name="waktu" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit Data -->
            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDataLabel">Edit Data Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="ubah_event.php" method="POST">
                                <input type="hidden" id="edit-id" name="id">
                                <div class="mb-3">
                                    <label for="edit-nama" class="form-label">Nama Event</label>
                                    <input type="text" class="form-control" id="edit-nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit-lokasi" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="edit-lokasi" name="lokasi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit-waktu" class="form-label">Waktu</label>
                                    <input type="date" class="form-control" id="edit-waktu" name="waktu" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID</th>
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
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['lokasi']; ?></td>
                            <td><?php echo $data['waktu']; ?></td>
                            <td>
                                <button class="btn btn-success btn-sm me-1 edit-button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editDataModal"
                                    data-id="<?php echo $data['id']; ?>"
                                    data-nama="<?php echo $data['nama']; ?>"
                                    data-lokasi="<?php echo $data['lokasi']; ?>"
                                    data-waktu="<?php echo $data['waktu']; ?>">
                                    <i class="fas fa-edit"></i>Edit
                                </button>
                                <a href="hapus_event.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.querySelectorAll('.edit-button');
            editButton.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const nama = this.getAttribute('data-nama');
                    const lokasi = this.getAttribute('data-lokasi');
                    const waktu = this.getAttribute('data-waktu');

                    document.getElementById('edit-id').value = id;
                    document.getElementById('edit-nama').value = nama;
                    document.getElementById('edit-lokasi').value = lokasi;
                    document.getElementById('edit-waktu').value = waktu;
                });
            });
        });
    </script>
</body>

</html>
