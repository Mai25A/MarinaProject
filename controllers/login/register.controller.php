<?php
require '../../models/login/register.model.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $save = saveUser($name, $phone, $email, $password);
            header("location: Body-Home.view.php");
            if ($save) {
                //Thêm thành công
                echo "Menu created successfully";
            } else {
                //Lỗi khi thêm
                echo "Failed to create register";
            }
        } else {
            //Thiếu dữ liệu
            echo "Missing data";
        }
    exit;
    }