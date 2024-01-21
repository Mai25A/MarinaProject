<?php
require_once "database/database.php";
?>
<?php

function createUser($name, $phone, $email, $password, $image)
{
    global $connection;
    if (isset($name, $phone, $email, $password, $image)) {
        $statement = $connection->prepare("INSERT INTO users (name, phone, email, password, image) VALUES (:name, :phone, :email, :password, :image);");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":image", $image);
        $statement->execute();
        return true;
    }
    return false;
}

/**
 * Get all data from table marina
 */
function selectAllUser()
{
    global $connection;
    $statement = $connection->prepare("SELECT * from users;");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

/**
 * Get a single record from table marina by id
 */
function selectOneUser($id)
{
    global $connection;

    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([":id" => $id]);
    $users = $statement->fetch(PDO::FETCH_ASSOC);
    return $users;
}

/**
 * Delete marina by id
 */
function deleteUserById($id)
{
    global $connection;
    if (isset($id)) {
        $statement = $connection->prepare("DELETE FROM users WHERE id = :id;");
        $statement->bindParam(":id", $id);
        $statement->execute();
        return true;
    }
    return false;
}

/**
 * Update marina
 */
function updateUser($id, $name, $phone, $email, $password, $image)
{
    global $connection;
    if (isset($id)) {
        $statement = $connection->prepare("UPDATE users SET name = :name, phone =:phone, email = :email, password = :password, image = :image WHERE id = :id");
        $statement->bindParam("name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return true;
    }
    return false;
}
function getUserById($id)
{
        global $connection;
        $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
        $statement->execute([':id' => $id]);
        $users = $statement->fetch(PDO::FETCH_ASSOC);
        return $users;

}
function get_usser_by_name($name)
{
  global $connection;
  $statement = $connection->prepare("SELECT * FROM users where name = :name");
  $statement->bindParam(":name", $name);
  $statement->execute();
  $result = $statement->fetch(PDO::FETCH_ASSOC);
  return $result;
}