<?php 
    include("models/tables.model.php");
    include("models/menu.model.php");
    if(isset($_GET['id'])){
        $table = get_one_table($_GET['id']);
        if(isset($_GET['type_menu'])){
            $products = get_dishes_by_type($_GET['type_menu']);
        }
    }
    include("views/Tables/table.detail.view.php");