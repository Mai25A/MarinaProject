<?php 
require '../../views/home/Body-Home.view.php';

if (isset($_POST['submit'])) {
    $pass = ($_POST["password"]);
    $email = ($_POST["email"]);
    $check = ($_POST['remember']);
  }