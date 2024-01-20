<?php
session_start();
require 'models/login/login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Kiểm tra xem email và password có rỗng hay không
    if (!empty($email) && !empty($password)) {
        $loggedIn = loginUser($email, $password);
              
        if ($loggedIn) {
            $user = getUser($email);
            $_SESSION['user']= $user[0];
            if ( $_SESSION['user']['role_id']==1) {
                header("Location: controllers/web/sidebav.controller.php");
                exit();
            } else {
                header("Location: controllers/web/home.controller.php");
                exit();
            }
        } else {
            // Hiển thị thông báo lỗi và chuyển hướng trở lại trang đăng nhập
            echo "<script>alert('please login again'); window.location.href = 'controllers/login/login.controller.php';</script>";
            exit();
        }
    } else {
        // Chuyển hướng trở lại trang đăng nhập nếu thông tin đăng nhập không hợp lệ
        header("Location: controllers/login/login.controller.php");
        exit();
    }
}
require_once "views/account/login.view.php"; 
            // Kiểm tra xem $userData có phải là mảng và không phải là giá trị boolean không
            // if (is_array($userData)) {
            //     $cookie_name = "User";
            //     $cookie_value = ($userData['name']);
            //     setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
            //     if ($userData['role_id'] == 1) {
            //         header("Location: ../../views/partials/sidebav.php");
            //     } else {
            //         header("Location: ../../views/home/Body-Home.view.php");
            //     }
            //     exit();
            // } else {
            //     // Hiển thị thông báo lỗi và chuyển hướng trở lại trang đăng nhập
            //     echo "<script>alert('Vui lòng đăng nhập lại'); window.location.href = '../../views/account/login.view.php';</script>";
            //     exit();
            // }
?>
