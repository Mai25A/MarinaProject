<?php
include '../../models/menu.model.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    // Thực hiện cập nhật thông tin sản phẩm trong cơ sở dữ liệu
    updateInfoProfile($id, $email, $name, $phone);
    // Chuyển hướng người dùng đến trang khác sau khi cập nhật thành công
    header("location: profile.detail.controller.php");
    exit();
} else {
    echo 'Không cập nhật được dữ liệu';
}
