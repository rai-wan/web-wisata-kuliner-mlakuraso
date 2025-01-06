<?php
// Pengaturan koneksi database
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "mlakuraso";

try {
    // Mencoba membuat koneksi ke database
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // Jika koneksi gagal, lemparkan exception
    if ($koneksi->connect_error) {
        throw new Exception("Koneksi gagal: " . $koneksi->connect_error);
    }
} catch (Exception $e) {
    // Tangkap exception dan tampilkan pesan kesalahan
    echo "<script>
    alert('" . $e->getMessage() . "');
    window.location.href = 'error_page.php';
    </script>";
}
?>
