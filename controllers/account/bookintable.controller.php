<?php
require 'models/login/bookingtable.model.php';
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user_id'])) {
    header('Location: /register');
    exit;
}
// Lấy user_id từ session
$user_id = $_SESSION['user_id'];
$tables = get_tables_by_user_id($user_id);

require 'views/account/bookingtable.view.php';