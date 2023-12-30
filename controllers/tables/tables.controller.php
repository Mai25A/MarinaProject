<?php

require_once ("../../models/tables.model.php");
// echo $_GET['type'];
// $type = get_one_table_types(1)
if(isset($_GET['type'])){
    $tables = get_type_table($_GET['type']);
}else{

   $tables = get_all_tables_type();
    // print_r($tables);
}
// print_r($types);


require_once "../../views/Tables/table.view.php"; 