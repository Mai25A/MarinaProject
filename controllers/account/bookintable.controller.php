<?php
session_start();
require 'models/login/bookingtable.model.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: /register');
    exit;
}
$user_id = $_SESSION['user_id'];
$tables = get_tables_by_user_id($user_id);

require 'views/account/bookingtable.view.php';