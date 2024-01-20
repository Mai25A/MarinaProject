<?php
session_start();
if(isset($_GET['partnerCode'])){
    $date = isset($_SESSION['date_session']) ? $_SESSION['date_session'] : '';
    echo '<script>alert("helle");</script>';
    $user_id = isset($_SESSION['user_id_session']) ? $_SESSION['user_id_session'] : '';
    $time = isset($_SESSION['time_session']) ? $_SESSION['time_session'] : '';
    $table_id = isset($_SESSION['table_id_session']) ? $_SESSION['table_id_session'] : '';
    $total_dispoint = isset($_SESSION['total_dispoint_session']) ? $_SESSION['total_dispoint_session'] : '';
    $datetime = $date.$time;
    add_to_booking($user_id,$datetime,$total_dispoint,$table_id);
}
require_once (dirname(dirname(__FILE__)) ."../../views/home/Body-Home.view.php");