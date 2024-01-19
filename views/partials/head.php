<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MARINA RESTAURANT</title>
</head>
<?php require_once dirname(dirname(__FILE__)) . ('../css/header.css.php'); ?>

<body>
    <header>

        <div class="header">
            <nav class="menu">
                <a href="" id="logo">
                    <img class="logo" src="../../asset/Logo.png" alt="logo">
                </a>

                <ul class=" mt-2 mainMenu">
                    <li><a href="../../views/home/Body-Home.view.php">Home</a></li>
                    <li><a href="../../views/home/About.view.php">About Us</a></li>
                    <li><a href="">Service</a>
                        <i class="fa fa-chevron-down" style="color: #ffffff; font-size:10px;"></i>
                        <ul class="childMenu">
                            <li><a href="">Menu</a></li>
                            <li><a href="../../controllers/tables/tables.controller.php">Tables</a></li>
                        </ul>
                    </li>
                    <li><a href="../../views/home/Contact.view.php">Contact Us</a></li>
                    <?php require '../../models/login/login.model.php'; ?>
                    <?php
                     if (isset($_SESSION['user_id'])) {
                        $name = $_SESSION['user_id'];
                        $users = get_user_by_name($name);
                    ?>
                        <li><a href="../../views/account/profile.detail.view.php" id=""><?= $users['name'] ?></a><img style="z-index : 29" src="<?= $users['image'] ?>" alt=""></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="../account/Login.view.php" id="loginLink">Login</a></li>
                    <?php
                    }
                    ?>
                    </button>
                </ul>
            </nav>
        </div>
        <div class="img">
            <h3>MARINA</h3>
        </div>