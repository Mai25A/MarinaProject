<?php
session_start();

// Xóa tất cả các biến session
$_SESSION = array();

// Hủy session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập

header("Location: ../../views/home/Body-Home.view.php");
exit();
?>
