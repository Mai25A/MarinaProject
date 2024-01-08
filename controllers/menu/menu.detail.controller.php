<?php
include('../../models/menu.model.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $menu = getProductById($id);
    include('../../views/menu/menu.detail.view.php');
}
?>