<?php
session_start();
include("../../models/bookings.model.php");
if (isset($_GET['partnerCode'])) {
    $date = isset($_SESSION['date_session']) ? $_SESSION['date_session'] : '';
    $user_id = isset($_SESSION['user_id_session']) ? $_SESSION['user_id_session'] : '';
    $time = isset($_SESSION['time_session']) ? $_SESSION['time_session'] : '';
    $table_id = isset($_SESSION['table_id_session']) ? $_SESSION['table_id_session'] : '';
    $total_dispoint = isset($_SESSION['total_dispoint_session']) ? $_SESSION['total_dispoint_session'] : '';
    $checkbox_quantities = $_SESSION['checkbox_quantities'];
    $booking_id = get_id_booking();
    foreach ($checkbox_quantities as $prodduct) {
        $id_product = $prodduct[0];
        $quantity = $prodduct[2];
        add_to_bookings_product($booking_id, $id_product, $quantity);
    };
    $new_time = $time . ":00:00";
    $datetime = new DateTime($date . ' ' . $new_time);
    $formatted_datetime = $datetime->format('Y-m-d H:i:s');
    $result = add_to_booking($user_id, $formatted_datetime, $total_dispoint, $table_id);
    if ($result) {
        echo '<script>
        window.location.href = "http://localhost:3000/controllers/home/home.controller.php";
    </script>';

    }
}
require_once(dirname(dirname(__FILE__)) . "../../views/home/Body-Home.view.php");