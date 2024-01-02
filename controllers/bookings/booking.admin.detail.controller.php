<?php
include("../../models/bookings.model.php");
$bookings = get_all_bookings();
if(isset($_GET['booking_id'])){
    $bookingId = $_GET['booking_id'];
    $bookings = get_booking_by_id($bookingId);
    print_r($bookings);
    include("../../views/bookings/booking.admin.detail.php");
};
