<?php
include("models/bookings.model.php");
 $bookings = get_all_bookings();
 include("views/bookings/booking.admin.view.php");
 