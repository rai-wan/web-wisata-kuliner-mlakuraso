<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
        input, select {
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
        .signin-link {
            margin-top: 10px; /* Jarak di atas link */
            text-align: center; /* Pusatkan teks */
        }
        .signin-link a {
            color: blue; /* Warna link */
            text-decoration: none; /* Menghilangkan garis bawah */
        }
        .signin-link a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>
    <div class="image-container"></div>
    <div class="form-container">
    <form action="daftar_process.php" method="POST">
    <h2>Registration</h2>
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <button type="submit">Register</button>
    <p>Already have an account? <a href="loginform.php">Sign in</a></p>
</form>
    </div>
</body>
</html>
