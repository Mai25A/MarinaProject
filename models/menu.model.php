<?php
include ("../../database/database.php");

function get_all_menu()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products;");
    $statement->execute();
    $menu = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $menu;
}