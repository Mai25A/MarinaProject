<?php
include_once("../../models/tables.model.php");

if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);
    $name = $_GET['name'];
    $img = $_GET['image'];
    $price = $_GET['price'];
    $description = $_GET['description'];
    $type = $_GET['type'];
    $table_type_id = $_GET['table_type_id'];
    update_table($id,$name,$img,$table_type_id,$price,$description);
    header("Location: table.admin.controller.php");
}