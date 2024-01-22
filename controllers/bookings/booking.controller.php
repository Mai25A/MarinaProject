<?php
// session_start();
include("models/bookings.model.php");
include('models/tables.model.php');
include('models/menu.model.php');
include('models/post.user.model.php');
include("views/partials/head.php");
include("views/css/bookings/booking.css.php");

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $user = getUserById($id);
    if (isset($_GET['table_id'])) {
        $table = get_one_table($_GET['table_id']);
    }
    $checkboxQuantityValues = $_GET['checkboxQuantityValues'];
    $decodedValues = json_decode($checkboxQuantityValues, true);
    $_SESSION['checkbox_quantities'] = $decodedValues;

    include("views/bookings/booking.view.php");
}else{
    include('/login');
}
