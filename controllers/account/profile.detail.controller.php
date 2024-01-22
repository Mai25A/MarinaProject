<?php
session_start();
include 'models/login/register.model.php';
include("models/login/login.model.php");

if (isset($_SESSION['user_id'])) {
    $id = (int)$_SESSION['user_id'];
    $user = get_user_by_id($id) ;
   
};

include 'views/account/profile.detail.view.php';

