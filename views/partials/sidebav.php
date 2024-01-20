
<?php require_once "/PHP_project/MarinaProject/views/css/sidebav.css.php";
require_once "/PHP_project/MarinaProject/views/partials/link.php";
?>

<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="#">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="/user">
                        <i class="mdi mdi-account-multiple"></i>
                        <span> CUSTOMERS  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="/user/reate">Create</a></li>
                        <li><a href="/user">List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/table">
                        <i class="mdi mdi-hotel"></i>
                        <span> TABLES  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="/tables/create'">Create</a></li>
                        <li><a href="/tables">List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu">
                        <i class="mdi mdi-comment"></i>
                        <span> MENU  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="/menu/create">Create</a></li>
                        <li><a href="/menu">List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="mdi mdi-pencil-box-multiple"></i>BOOKINGS </a>
                </li>

                <li>
                    <a href="#"><i class="mdi mdi-paypal"></i>REVENUE </a>
                </li>


                <li>
                    <a href="#"><i class="mdi mdi-heart"></i>CHECK IN</a>
                </li>
                <li>
                    <a href="/logout"><i class="mdi mdi-heart"></i>LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php require_once "/PHP_project/MarinaProject/views/js/sidebav.js.php"; ?>
