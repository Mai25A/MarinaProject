<?php
include_once("../../models/post.user.model.php");

    
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $image = $_GET['image'];

    createUser($name, $phone, $email, $password, $image);
    header('Location: post.controller.php');
    exit();

