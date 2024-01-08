<?php
include_once("../../models/tables.model.php");

if (isset($_GET['id_delete'])) {
    $id =$_GET['id_delete'];
    delete_table($id);
    header("Location: table.admin.controller.php");
    exit;
}
?>