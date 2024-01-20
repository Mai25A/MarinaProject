<?php
require '../../models/login/register.model.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $save = saveUser($name, $phone, $email, $password);
            if ($save) {
                require "../../views/home/Body-Home.view.php";
                
            } else {
                echo "Failed to create register";
            }
        } else {
            echo "Missing data";
        }
    exit;
    }
    require_once "../../views/account/register.view.php"; 
?>