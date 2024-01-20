<?php

require 'models/login/register.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $save = saveUser($name, $phone, $email, $password);
        if ($save) {
            $_SESSION['user_id'] = $save; // Lưu trữ ID người dùng vào biến phiên
            header("Location: views/home/Body-Home.view.php"); // Chuyển hướng đến trang hồ sơ người dùng sau khi đăng ký thành công
            exit;
        } else {
            echo "Failed to create register";
        }
    } else {
        echo "Missing data";
    }
}
require 'views/account/profile.detail.view.php';
