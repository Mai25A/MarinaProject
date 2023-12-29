<?php
require_once dirname(dirname(__DIR__)) . "/database/database.php";

function createUser( $name,  $phone,  $email,  $password,  $image)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (name, phone, email, password, image) VALUES (:name, :phone, :email, :password, :image)");
    $statement->execute([
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':image' => $_POST['image']
    ]);
}

function getUsers(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users");
    $statement->execute();
    $users = $statement->fetchAll();
    return $users;
}

function getUser(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    $user = $statement->fetch();
    return $user;
}

function deleteUser(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement;
}

function updateUser( $name,  $phone,  $email,  $password,  $image, int $id)
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET name = :name, phone = :phone, email = :email, password = :password, image = :image WHERE id = :id");
    $statement->execute([
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':image' => $_POST['image'],
        ':id' => $_POST['id']
    ]);
}