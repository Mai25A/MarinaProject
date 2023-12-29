<?php
require dirname(dirname(__DIR__)) . '/database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['image']) && !empty($_POST['id'])) {
        require_once(dirname(dirname(__DIR__)) . '/models/User/post.model.php');
        updateUser($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['password'], $_POST['image'], $_POST['id']);

        header('location: /post');
        exit();
    }
}