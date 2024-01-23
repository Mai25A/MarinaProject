<?php

require 'models/login/register.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars($_POST['password']);

        if (validateAccount($email, $phone)) {
            $save = saveUser($name, $phone, $email, $password);
            if ($save) {
                $_SESSION['user_id'] = $save; // Lưu trữ ID người dùng vào biến phiên
                header("Location: /home"); // Chuyển hướng đến trang hồ sơ người dùng sau khi đăng ký thành công
                exit;
            } else {
                echo "Failed to create register";
            }
        } else {
            echo '<script>alert("Failed to create register");</script>';
        }
    } else {
        echo "Missing data";
    }
}
require 'views/account/Register.view.php';
