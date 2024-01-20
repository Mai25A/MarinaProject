<?php
include 'models/menu.model.php';
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    if (isset($_POST['id'])) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $id = urldecode($_POST['id']);
        // Thực hiện cập nhật thông tin sản phẩm trong cơ sở dữ liệu
        updateMenuManagement($id, $name, $image, $category_id, $price, $description);
        header("location: /menu");
        exit();
    }
}
require "views/menu/menu.admin.update.view.php";