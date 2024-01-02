<?php
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    require dirname(dirname(__FILE__)) .'../../models/User/post.model.php';
    deleteUserById($id);
    header('Location: /post');
}