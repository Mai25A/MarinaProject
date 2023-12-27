<?php
require_once "../database/database.php";
function get_all_posts(){
    global $conn;
    $statement = $conn->prepare("SELECT * FROM tables");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}