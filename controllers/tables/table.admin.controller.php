<?php

require_once ("../../models/tables.model.php");

// if(isset($_GET['type'])){
//     $tables = get_type_table($_GET['type']);
// }else{

//    $tables = get_all_tables();
//     // print_r($tables);
// }
$tables = get_tables();
require_once "../../views/Tables/table.admin.view.php"; 