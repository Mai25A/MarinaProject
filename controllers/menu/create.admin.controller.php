
<?php
require_once("models/menu.model.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['category_id']) && 
    !empty($_POST['price']) && !empty($_POST['description'])) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $create = createMenuManagement($name, $image,$category_id, $price, $description);
        header("location: /menu");
        if ($create) {
            echo "Menu created successfully";
        } else {
            echo "Failed to create menu";
        }
    } else {
        echo "Missing data";
    }
}
require_once("views/menu/menu.admin.create.view.php");