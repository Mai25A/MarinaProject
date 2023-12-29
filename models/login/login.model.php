<?php 
require '../../views/home/Body-Home.view.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = test_input($_POST["password"]);
    $email = test_input($_POST["email"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }