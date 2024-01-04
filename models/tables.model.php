<?php
include("../../database/database.php");
//get het du lieu cua tat ca cac ban
function get_all_tables_type()
{
    global $connection;
    $statement = $connection->prepare("SELECT t.id AS id,
    t.name AS name,
    t.image AS image,
    t.table_type_id AS table_type_id,
    t.price AS price,
    t.description AS description,
    tp.id AS type_id,
    tp.type AS type,
    tp.number_of_seat AS number_of_seat
    from tables t
    INNER join table_types tp on t.table_type_id = tp.id ;");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}
function get_tables()
{
    global $connection;
    $statement = $connection->prepare("SELECT * from tables;");
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}
///get 1 hang cua tables
function get_one_table($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT t.id AS id,
    t.name AS name,
    t.image AS image,
    t.table_type_id AS table_type_id,
    t.price AS price,
    t.description AS description,
    tp.id AS type_id,
    tp.type AS type,
    tp.number_of_seat AS number_of_seat
    from tables t
    INNER join table_types tp on t.table_type_id = tp.id  WHERE t.id = :id");
    $statement->execute([':id' => $id]);
    $tables = $statement->fetch(PDO::FETCH_ASSOC);
    return $tables;
}

//lay type của ban
function get_type_table($type)
{
    global $connection;
    $statement = $connection->prepare("SELECT * from tables join table_types on tables.table_type_id = table_types.id where type = :type;");
    $statement->bindParam(":type", $type);
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
function update_table($id, $name, $image, $table_type_id, $price, $description)
{
    global $connection;
    
    // Check if $id is set and valid
    if (!isset($id) || !is_numeric($id)) {
        return false;
    }

    // Validate other input parameters as needed
    
    try {
        $statement = $connection->prepare("UPDATE tables SET name = :name, image = :image, table_type_id = :table_type_id, price = :price, description = :description WHERE id = :id");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":table_type_id", $table_type_id);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":id", $id);
        $statement->execute();

        // Check if any rows were affected
        if ($statement->rowCount() > 0) {
            return true;
        }

        // No rows affected, possibly the ID doesn't exist
        return false;
    } catch (PDOException $e) {
        // Handle the exception as needed
        return false;
    }
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

function get_tables_by_quantity($number_of_seat)
{
    global $connection;
    $sql = "SELECT * from tables join table_types on tables.table_type_id = table_types.id WHERE table_types.number_of_seat = :number_of_seat";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':number_of_seat', $number_of_seat);
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}