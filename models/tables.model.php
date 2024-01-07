<?php
include("../../database/database.php");
function get_all_tables_type()
{
    global $connection;
    $statement = $connection->prepare("SELECT t.id,
    t.name,
    t.image,
    t.table_type_id,
    t.price,
    t.description,
    tp.id AS type_id,
    tp.type,
    tp.number_of_seat
    FROM tables t
    INNER JOIN table_types tp ON t.table_type_id = tp.id;");
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
function get_one_table($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT t.id,
    t.name,
    t.image,
    t.table_type_id,
    t.price,
    t.description,
    tp.id AS type_id,
    tp.type,
    tp.number_of_seat
    FROM tables t
    INNER JOIN table_types tp ON t.table_type_id = tp.id; WHERE t.id = :id");
    $statement->execute([':id' => $id]);
    $tables = $statement->fetch(PDO::FETCH_ASSOC);
    return $tables;
}
function get_type_table($type)
{
    global $connection;
    $statement = $connection->prepare("SELECT t.id,
    t.name,
    t.image,
    t.table_type_id,
    t.price,
    t.description,
    tp.id AS type_id,
    tp.type,
    tp.number_of_seat
    FROM tables t
    INNER JOIN table_types tp ON t.table_type_id = tp.id where type = :type;");
    $statement->bindParam(":type", $type);
    $statement->execute();
    $types = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $types;

}
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
    if (!isset($id) || !is_numeric($id)) {
        return false;
    }
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
        return false;
    } catch (PDOException $e) {
        return false;
    }
}
function get_tables_by_quantity($number_of_seat)
{
    global $connection;
    $sql = "SELECT t.id,
    t.name,
    t.image,
    t.table_type_id,
    t.price,
    t.description,
    tp.id AS type_id,
    tp.type,
    tp.number_of_seat
    FROM tables t
    INNER JOIN table_types tp ON t.table_type_id = tp.id WHERE tp.number_of_seat = :number_of_seat";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':number_of_seat', $number_of_seat);
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}