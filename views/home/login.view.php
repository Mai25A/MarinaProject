<?php 
require_once('../css/login.css.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Đăng nhập</title>
</head>
<body>
    <form method="POST" action="login.php">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember">Remember password
        </div>
        <div>
            <input type="submit" value="Đăng nhập" name="login">
        </div>
        <hr>
        <p>Hoặc đăng nhập bằng tài khoản:</p>
        <button onclick="loginWithGoogle()"><i class="fa fa-google text-info p-2"></i>Google account</button></br>
        <button onclick="loginWithFacebook()"><i class="fa fa-facebook text-primary p-2"></i>Facebook account</button>
        <p><a href="forgot_password.php">Quên mật khẩu?</a></p>
        <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    </form>

    <script>
        function loginWithGoogle() {
            // Xử lý đăng nhập bằng tài khoản Google
        }

        function loginWithFacebook() {
            // Xử lý đăng nhập bằng tài khoản Facebook
        }
    </script>
</body>
</html>