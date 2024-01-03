<?php 
    include("../../models/tables.model.php");
    if(isset($_GET['id'])){
        $table = get_one_table($_GET['id']);
    }
    include("../../views/Tables/table.detail.view.php");