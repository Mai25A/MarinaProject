<?php
require_once dirname(dirname(__FILE__)) . "../../database/database.php";
?>
<?php

function createUser($value)
{
    $db = db();
    // Chuẩn bị câu lệnh SQL với các placeholder
    $stmt = $db->prepare("INSERT INTO marina (name, phone, email, password, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $value['name']);
    $stmt->bindParam(2, $value['phone']);
    $stmt->bindParam(3, $value['email']);
    $stmt->bindParam(4, $value['password']);
    $stmt->bindParam(5, $value['image']);

    // Thực thi câu lệnh đã chuẩn bị
    $stmt->execute();
    return true;
}

/**
 * Get all data from table marina
 */
function selectAllUser()
{
    $db = db();
    $stmt = $db->prepare("SELECT * FROM marina");
    return $stmt->fetchAll();
}

/**
 * Get a single record from table marina by id
 */
function selectOneUser($id)
{
    $db = db();

    $stmt = $db->prepare("SELECT * FROM marina WHERE id = ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();
    return $stmt->fetchAll();
}

/**
 * Delete marina by id
 */
function deleteUserById($id)
{
    $db = db();

    $stmt = $db->prepare("DELETE FROM marina WHERE id = ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();
    return true;
}

/**
 * Update marina
 */
function updateUser($id, $newname, $newphone, $newemail, $newpassword)
{
    $db = db();

    $stmt = $db->prepare("UPDATE marina SET name = ?, phone = ?, email = ?, password = ? WHERE id = ?");

    $stmt->bindParam(1, $newname);
    $stmt->bindParam(2, $newphone);
    $stmt->bindParam(3, $newemail);
    $stmt->bindParam(4, $newpassword);
    $stmt->bindParam(5, $id);

    if ($stmt->execute()) {
        return true;
    }
    return false;
}