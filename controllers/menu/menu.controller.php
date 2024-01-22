<?php
require_once "models/menu.model.php";
$menu = get_all_menu();
if (isset($_GET['type'])) {
    $categoryId = $_GET['type'];
    $menuByCategory = getMenuByCategory($categoryId);
} else {
    $menuByCategory = $menu;
}
require_once "views/menu/menu.view.php";
?>