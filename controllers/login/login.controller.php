<?php
require '../../models/login/login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $email = $_POST['email'];

    //     // Kiểm tra xem email và password có rỗng hay không
    if (!empty($email) && !empty($password)) {
        $loggedIn = loginUser($email, $password);

        if ($loggedIn) {
            $userData = getname($email);
            $cookie_name = "User";
            $cookie_value = ($userData['name']);
            // echo $cookie_value;
            setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

            header("Location: ../../views/home/Body-Home.view.php");
            exit();
        } else {
            // Hiển thị thông báo lỗi và chuyển hướng trở lại trang đăng nhập
            echo "<script>alert('Vui lòng đăng nhập lại'); window.location.href = '../../views/account/login.view.php';</script>";
            exit();
        }
    } else {
        // Chuyển hướng trở lại trang đăng nhập nếu thông tin đăng nhập không hợp lệ
        header("Location: ../../views/account/login.view.php");
        exit();
    }
}
?>