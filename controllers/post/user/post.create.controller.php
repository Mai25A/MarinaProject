<?php

// Kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['phone'])
    && !empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['image'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $img = $_POST['image'];

    createUser($_POST);
    header('Location: post.view.php');
    exit();
}

header('Location: post.view.php');
exit();
?>
