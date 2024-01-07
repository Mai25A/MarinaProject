
<?php
include('../../models/menu.model.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $menu = get_one_menu($id);
    include('../../views/menu/menu.detail.view.php');
}
?>