<?php
include_once("models/post.user.model.php");

if(($_SERVER['REQUEST_METHOD'] == 'POST')){
    if (isset($_POST['id'])) {
        $id = urldecode($_POST['id']);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $image = $_POST['image'];
        updateUser($id,$name,$phone,$email,$password,$image);
    
        header('location: /user');
        exit();
        
    }
}
include_once("views/user/post.update.view.php");