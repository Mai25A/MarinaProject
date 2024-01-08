<?php
require '../../models/login/login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $loggedIn = loginUser($email, $password);
        if ($loggedIn) {
            // Redirect to home page or any other desired page upon successful login
            header("Location: ../../views/home/Body-Home.view.php");
            exit();
        } else {
            echo "Login failed. Invalid email or password.";
        }
    } 
}
?>