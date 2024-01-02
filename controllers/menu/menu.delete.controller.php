<?php
include("../../models/menu.model.php");
if(isset($_GET['id'])){
    $id = urldecode($_GET['id']);
    delete_dish($id);
    header("location: menu.admin.controller.php");
    exit;
}