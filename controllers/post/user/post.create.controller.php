<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['email']) and !empty($_POST['password'])and !empty($_POST['image'])) {
        require_once(dirname(dirname(__DIR__)) .'../../models/User/post.model.php');
        createUser($_POST['name'], $_POST['phone'] , $_POST['email'], $_POST['password'], $_POST['image']);

        header('location: /post/user/create');
    }
    
}
