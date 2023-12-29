<?php
include_once("../../models/tables.model.php");
// include("../../views/Tables/table.create.view.php");


    // if (!empty($_POST['name']) and !empty($_POST['image']) and !empty($_POST['table_type_id']) and !empty($_POST['price'])  and !empty($_POST['description'])) {
    //     if(create_table($_POST['name'],$_POST['image'],$_POST['table_type_id'],$_POST['price'],$_POST['description'])){
    //         header('Location: table.admin.controller.php');
    //     }
    // }

        $name = $_GET['name'];
        $img = $_GET['image'];
        $price = $_GET['price'];
        $description = $_GET['description'];
        $type = $_GET['type'];
        $table_type_id = $_GET['table_type_id'];

        create_table($name,$img, $table_type_id,$price,$description);
        header("Location: table.admin.controller.php");



