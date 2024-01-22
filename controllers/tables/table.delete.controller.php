<?php
include_once("models/tables.model.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id_delete'])) {
        $id =urldecode( $_GET['id_delete']);
        delete_table($id);

        header("Location: /table");
        exit;
    }
}
?>
