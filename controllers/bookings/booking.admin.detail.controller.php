<?php
include("../../models/bookings.model.php");
if(isset($_GET['booking_id'])){
    $bookingId = $_GET['booking_id'];
    $booking = get_booking_by_id($bookingId);
    print_r($booking);
    include("../../views/bookings/booking.admin.detail.php");
};
