<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'mlakuraso');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username ada di database
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Ambil data user
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "Login berhasil! Selamat datang, " . htmlspecialchars($user['username']);
    } else {
        echo "Password salah.";
    }
} else {
    echo "Username tidak ditemukan.";
}

$stmt->close();
$conn->close();
?>
