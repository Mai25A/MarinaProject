<?php
require_once ("../../models/tables.model.php");
if (isset($_GET['type'])) {
    $types = $_GET['type'];
    $tables = get_type_table($_GET['type']);
    if (isset($_GET['number_of_seat']) && $_GET['number_of_seat'] != 'Quantity') {
        $tables = get_tables_by_quantity($_GET['number_of_seat']);
    }
} else if (isset($_GET['number_of_seat']) && $_GET['number_of_seat'] != 'Quantity') {
    $tables = get_tables_by_quantity($_GET['number_of_seat']);
} else {
    $tables = get_all_tables_type();
}
require_once "../../views/Tables/table.view.php"; 