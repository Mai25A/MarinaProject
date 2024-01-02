<?php
require_once("../../models/menu.model.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['price']) && !empty($_POST['description'])) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $create = createMenuManagement($name, $image, $price, $description);
        header("location: menu.admin.controller.php");

        if ($create) {
            //Thêm thành công
            echo "Menu created successfully";
        } else {
            //Lỗi khi thêm
            echo "Failed to create menu";
        }
    } else {
        //Thiếu dữ liệu
        echo "Missing data";
    }
}

require_once("../../controllers/menu/create.admin.controller.php");
