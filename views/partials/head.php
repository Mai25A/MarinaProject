<?php
session_start();
// $userData = $_SESSION['user_data'];
require_once('views/css/header.css.php');
require_once "views/partials/link.php";
?>

<body>
    <header>

        <div class="header">
            <nav class="menu">
                <a href="" id="logo">
                    <img class="logo" src="../../asset/Logo.png" alt="logo">
                </a>

                <ul class=" mt-2 mainMenu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="">Service</a>
                        <i class="fa fa-chevron-down" style="color: #ffffff; font-size:10px;"></i>
                        <ul class="childMenu">
                            <li><a href="/menu/web">Menu</a></li>
                            <li><a href="/tables/web">Tables</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact Us</a></li>
                    <?php require_once "models/login/login.model.php";
                    if (isset($_SESSION['user_id'])) {
                        $id = $_SESSION['user_id'];
                        $user = get_user_by_id($id) ;
                        ?>
                        <li><a href="/profile" id="">
                                <?php echo($user['name']) ?>
                            </a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li><a href="/login" id="loginLink">Login</a></li>
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