<?php
include_once("../../models/tables.model.php");
include("../../views/Tables/table.create.view.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['image']) and !empty($_POST['table_type_id']) and !empty($_POST['price'])  and !empty($_POST['description'])) {
        if(create_table($_POST['name'],$_POST['image'],$_POST['table_type_id'],$_POST['price'],$_POST['description'])){
            header('Location: /admin_table');
        }
    }
}
