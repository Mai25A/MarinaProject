<?php
session_start(); 
// Hủy session
session_destroy();

// Chuyển hướng hoặc thực hiện các hành động khác sau khi hủy session
header("Location: views/home/Body-Home.view.php");
exit();
?>
