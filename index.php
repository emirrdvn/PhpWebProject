<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Film Kulübü Yönetim Uygulaması</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Film Kulübü Yönetim Uygulaması</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Giriş Yap</h3>
                <form method="post" action="login.php">
                    <div class="form-group">
                        <label for="username">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Kayıt Ol</h3>
                <form method="post" action="register.php">
                    <div class="form-group">
                        <label for="reg_username">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="reg_username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="reg_password">Şifre:</label>
                        <input type="password" class="form-control" id="reg_password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
