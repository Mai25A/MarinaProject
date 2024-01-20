<?php
include_once("models/tables.model.php");

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    if (isset($_POST['id_update'])) {
        $id = urldecode($_POST['id_update']);
        $name = $_POST['name'];
        $img = $_POST['image'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $type = $_POST['type'];

        if (isset($_POST['table_type_id'])) {
            $table_type_id = $_POST['table_type_id'];
        }

        // echo $id;
        update_table($id, $name, $img, $table_type_id, $price, $description);
        header("Location: /table");
    }
}
include_once("views/Tables/table.update.view.php");
