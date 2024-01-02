<?php

require_once ("../../models/tables.model.php");

if (isset($_GET['type'])) {
    $types = $_GET['type'];
    $tables = get_type_table($_GET['type']);
    if (isset($_GET['table_type_id']) && $_GET['table_type_id'] != 'Quantity') {
        $tables = get_tables_by_quantity($_GET['table_type_id']); 
    }
} elseif (isset($_GET['table_type_id']) && $_GET['table_type_id'] != 'Quantity') {
    $tables = get_tables_by_quantity($_GET['table_type_id']);
} else {
    $tables = get_all_tables_type();
}




require_once "../../views/Tables/table.view.php"; 