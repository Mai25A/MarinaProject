<?php
include_once("../../models/tables.model.php");

if (isset($_GET['id_update'])) {
    $id = $_GET['id_update'];
    $name = $_GET['name'];
    $img = $_GET['image'];
    $price = $_GET['price'];
    $description = $_GET['description'];
    $type = $_GET['type'];
    // echo $type;
    if(isset($_GET['table_type_id'])){
        $table_type_id = $_GET['table_type_id'];
    }
    
    // echo $id;
    update_table($id,$name,$img,$table_type_id,$price,$description);
    header("Location: table.admin.controller.php");

}