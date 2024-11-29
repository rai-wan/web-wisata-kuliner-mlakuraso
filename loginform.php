<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_loginform.css" media="screen" title="no title">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
        <h2>LOGIN</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password"class="form-control">
            </div>
            <href="dashboard.html">
</br>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </a>
            <div class="bottom">
            <label for="username" class="username-label">Belum punya akun ?</label>
                    <a href="daftarform.php" class ="register-link" >Register disini</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
