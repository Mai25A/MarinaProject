<?php
require dirname(dirname(__DIR__)) .'../../database/database.php';
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    require dirname(dirname(__DIR__)) .'../../models/User/post.model.php';
    deleteUser($id);
    header('Location: /post');
}