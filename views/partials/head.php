<?php
// $userData = $_SESSION['user_data'];
require_once('/PHP_project/MarinaProject/views/css/header.css.php');
require_once "/PHP_project/MarinaProject/views/partials/link.php";
?>

<body>
    <header>

        <div class="header">
            <nav class="menu">
                <a href="" id="logo">
                    <img class="logo" src="../../asset/Logo.png" alt="logo">
                </a>

                <ul class=" mt-2 mainMenu">
                    <li><a href="../../controllers/web/home.controller.php">Home</a></li>
                    <li><a href="../../controllers/web/about.controller.php">About Us</a></li>
                    <li><a href="">Service</a>
                        <i class="fa fa-chevron-down" style="color: #ffffff; font-size:10px;"></i>
                        <ul class="childMenu">
                            <li><a href="../../controllers/menu/menu.controller.php">Menu</a></li>
                            <li><a href="../../controllers/tables/tables.controller.php">Tables</a></li>
                        </ul>
                    </li>
                    <li><a href="../../controllers/web/contact.controller.php">Contact Us</a></li>
                    <?php require_once "/PHP_project/MarinaProject/models/login/login.model.php";
                    if (isset($_SESSION['user'])) {
                        ?>
                        <li><a href="../../controllers/account/profile.detail.controller.php" id="">
                                <?= $_SESSION['user']['name'] ?>
                            </a>
                            <img style="z-index : 29" src="<?= $_SESSION['user']['image'] ?>" alt="anh">
                        </li>
                        <?php
                    } else {
                        ?>
                        <li><a href="../../controllers/login/login.controller.php" id="loginLink">Login</a></li>
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