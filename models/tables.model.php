<?php
require_once "../database/database.php";
function get_all_tables(){
    global $conn;
    $statement = $conn->prepare("SELECT * FROM tables");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}

function get_one_table($id){
    global $conn;
    $statement = $conn->prepare("SELECT * FROM tables WHERE id = :id");
    $statement->execute([':id' => $id]);
    $tables = $statement->fetch(PDO::FETCH_ASSOC);
    return $tables;
}
// function insert_one_table($title, $description){
    
//     global $conn;
//     $statement = $conn->prepare("INSERT INTO tables (title, description) VALUES (:title, :description)");
//     $statement->execute([
//         ':title' => $title,
//         ':description' => $description
//     ]);
//     return true;
// }