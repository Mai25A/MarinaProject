<?php
require_once '../../database/database.php';

function saveUser($name, $phone, $email, $password) {
    global $connection;

    try {
        $query = "INSERT INTO users (name, phone, email, password, image) VALUES (:name, :phone, :email, :password, :image)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->bindValue(':image', null, PDO::PARAM_NULL); // Set image as NULL

        $statement->execute();
        
        // Optional: Retrieve the auto-generated ID if needed
        $lastInsertId = $connection->lastInsertId();
        
        // Return the ID if needed
        return $lastInsertId;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false to indicate failure
    }
}