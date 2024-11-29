<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_daftarform.css" media="screen" title="no title">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DAFTAR</title>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
        <h2>PENDAFTARAN</h2>
        <form action="daftar_process.php" method="POST">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="loginform.php">
                <button type="submit" name="register" class="btn">Daftar</button>
            </a>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="loginform.php">Login disini</a>
                </p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
