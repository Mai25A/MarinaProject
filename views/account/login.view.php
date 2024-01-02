<?php
require_once('../css/login.css.php');
require_once('../../database/database.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Đăng nhập</title>
</head>

<body>

    <div class="">
        <form method="POST" action="/login.model.php">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" required placeholder="Email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" name="password" required
                    placeholder="Password">
            </div>
            <div>
                <input type="checkbox" id="remember" name="remember">Remember password
            </div>
            <div>
                <input type="submit" value="Login" name="login">
            </div>
            <hr>
            <p>Or login by account:</p>
            <button onclick="loginWithGoogle()"><i class="icon fa fa-google text-info p-2"></i>Google
                account</button></br>
            <button onclick="loginWithFacebook()"><i class="icon fa fa-facebook text-primary p-2"></i>Facebook
                account</button>
            <p><a href="forgot_password.php">Forgot password?</a></p>
            <p>Not have account? <a href="register.php">Register</a></p>
        </form>

    </div>

</body>

</html>