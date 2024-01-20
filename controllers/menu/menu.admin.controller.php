<?php
require_once ("models/menu.model.php");
$menu = get_all_menu();
require_once "views/menu/menu.admin.view.php";
?>