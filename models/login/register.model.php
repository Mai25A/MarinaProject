<?php
require_once 'database/database.php';

function saveUser($name, $phone, $email, $password)
{
    global $connection;
    try {
        $image = 'https://cdn.pixabay.com/photo/2023/04/06/05/33/girl-character-7902894_1280.jpg';
        $query = "INSERT INTO users (name, role_id, phone, email, password, image) VALUES (:name, :role_id, :phone, :email, :password, :image)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindValue(':role_id', 2);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->bindValue(':image', $image);

        $statement->execute();

        $lastInsertId = $connection->lastInsertId();
        return $lastInsertId;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function validatePhone($phone)
{
    global $connection;
    try {
        $query = "SELECT COUNT(*) FROM users WHERE phone = :phone";
        $statement = $connection->prepare($query);
        $statement->bindParam(':phone', $phone);
        $statement->execute();

        if ($statement->fetchColumn() > 0) {
            return false;
        }

        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function validateEmail($email)
{
    global $connection;
    try {
        $query = "SELECT COUNT(*) FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();

        if ($statement->fetchColumn() > 0) {
            return false;
        }

        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function validateAccount($email, $phone)
{
    if (validateEmail($email) && validatePhone($phone)) {
        return true;
    } else {
        return false;
    }
}
