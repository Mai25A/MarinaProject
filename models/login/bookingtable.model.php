<?php
require_once 'database/database.php';
function get_tables_by_user_id($user_id)
{
    global $connection;
    $query = "SELECT * FROM bookings AS b
              INNER JOIN tables AS t ON t.id = b.table_id
              WHERE b.user_id = :user_id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}