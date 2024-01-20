<?php
include_once("models/tables.model.php");

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $name = $_POST['name'];
    $img = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $table_type_id = $_POST['table_type_id'];

    create_table($name, $img, $table_type_id, $price, $description);
    header("Location: /table");
}
include("views/Tables/table.create.view.php");



