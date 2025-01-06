<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
        }
        .image-container {
            flex: 1; /* Mengambil ruang yang sama */
            background-image: url('img/makan2.jpg'); /* Ganti dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
        }
        .form-container {
            flex: 1; /* Mengambil ruang yang sama */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Mengatur arah kolom */
        }
        form {
            background: rgba(255, 255, 255, 0.8); /* Background dengan transparansi */
            padding: 100px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        h2 {
            margin-bottom: 20px; /* Jarak di bawah judul */
            color: #333; /* Warna teks */
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: blue; /* Warna tombol biru */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: darkblue; /* Warna lebih gelap saat hover */
        }
        .register-link {
            margin-top: 10px; /* Jarak di atas link */
            text-align: center; /* Pusatkan teks */
        }
        .register-link a {
            color: blue; /* Warna link */
            text-decoration: none; /* Menghilangkan garis bawah */
        }
        .register-link a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>
    <div class="image-container"></div>
    <div class="form-container">
        <form action="login_process.php" method="POST">
            <h2>LOGIN</h2> <!-- Judul di atas formulir -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>

            <div class="register-link">
                Please Register <a href="daftarform.php">Here!</a>
            </div>
        </form>
    </div>
</body>
</html>