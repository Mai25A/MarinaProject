<?php
include("../../database/database.php");

function get_all_menu()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products");
    $statement->execute();
    $menu = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $menu;
}

function createMenuManagement( $name, $image, $price, $description)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO products (name, image, category_id, price, description) VALUES (?, ?, NULL, ?, ?)");
    $createMenu = $statement->execute([$name, $image, $price, $description]);
    return $createMenu;
}