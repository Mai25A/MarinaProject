<?php
require_once '../../database/database.php';
function get_tables_by_user_id($user_id)
{
    global $connection;
    // Truy vấn SQL để lấy thông tin bảng tables dựa trên user_id và table_id từ bảng booking
    $query = "SELECT t.* FROM tables AS t
              INNER JOIN bookings AS b ON t.id = b.id
              WHERE b.user_id = :user_id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();
    $tables = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $tables;
}