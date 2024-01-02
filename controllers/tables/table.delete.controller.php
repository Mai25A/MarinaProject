<?php
include_once("../../models/tables.model.php");

if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);
    delete_table($id);
    header("Location: table.admin.controller.php");
    exit;
}
?>