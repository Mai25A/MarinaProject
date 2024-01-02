<?php
include ("../../database/database.php");
//get het du lieu cua tat ca cac ban
function get_all_tables_type(){
    global $connection;
    $statement = $connection->prepare("SELECT * from tables join table_types on tables.table_type_id = table_types.id ;");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}
function get_tables(){
    global $connection;
    $statement = $connection->prepare("SELECT * from tables;");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}
///get 1 hang cua tables
function get_one_table($id){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM tables WHERE id = :id");
    $statement->execute([':id' => $id]);
    $tables = $statement->fetch(PDO::FETCH_ASSOC);
    return $tables;
}
// function insert_one_table($title, $description){
    
//     global $connection;
//     $statement = $connection->prepare("INSERT INTO tables (title, description) VALUES (:title, :description)");
//     $statement->execute([
//         ':title' => $title,
//         ':description' => $description
//     ]);
//     return true;
// }
//lay type của ban
function get_type_table($type){
     global $connection;
     $statement = $connection->prepare("SELECT * from tables join table_types on tables.table_type_id = table_types.id where type = :type;");
     $statement->bindParam(":type",$type);
    $statement->execute();
    $types = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $types;
    
}
//tạo mot ban moi


function create_table($name, $image, $table_type_id, $price, $description)
{
    global $connection;

    if (isset($name, $image, $table_type_id, $price, $description)) {
        $statement = $connection->prepare("INSERT INTO tables (name, image, table_type_id, price, description) VALUES (:name, :image, :table_type_id, :price, :description);");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":table_type_id", $table_type_id);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":description", $description);
        $statement->execute();
        return true;
    } 
    return false;
}

function delete_table($id)
{
    global $connection;

    if (isset($id)) {
        $statement = $connection->prepare("DELETE FROM tables WHERE id = :id;");
        $statement->bindParam(":id", $id);
        $statement->execute();
        return true;
    } 
    return false;
}
function update_table($id, $name, $image, $table_type_id, $price, $description) {
    global $connection;
    if (isset($id)) {
        $statement = $connection->prepare("UPDATE tables SET name = :name, image = :image, table_type_id = :table_type_id, price = :price, description = :description WHERE id = :id;");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":table_type_id", $table_type_id);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return true;
    }
    return false;
}
// //Lay 1 type cua 1 table
// function get_one_type_table($type){
//     global $connection;
//     $statement = $connection->prepare("SELECT  *  from tables join table_types on tables.table_type_id = table_types.id where table_types.type = :type");
//     $statement->bindParam(":type",$type);
//     $statement->execute();
//     $types = $statement->fetchAll(PDO::FETCH_ASSOC);
//     return $types;
// }

function get_tables_by_quantity($table_type_id){
    global $connection;
    $sql = "SELECT * from tables join table_types on tables.table_type_id = table_types.id WHERE table_types.id = :table_type_id";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':quantity', $table_type_id);
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}