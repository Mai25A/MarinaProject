<?php
include_once("models/post.user.model.php");

if(($_SERVER['REQUEST_METHOD'] == 'POST')){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['image'];

    createUser($name, $phone, $email, $password, $image);
    header('Location: /user');
    exit();
}

include_once("views/user/post.create.view.php");
?>