<?php
require_once "views/partials/sidebav.php";
include("views/css/bookings/booking.admin.css.php");
?>
<div class="container">
    <form action="#" method="post">
        <div class="container ms-5 booking_form">
            <div class="title">
                <h4>BOOKINGS MANAGEMENT</h4>
            </div>
            <div class="table_booking">
                <table class="table ms-5 table-striped">
                    <thead>
                        <tr style="text-align:center;">
                            <th>STT</th>
                            <th>User ID</th>
                            <th>Booking ID</th>
                            <th>Product ID</th>
                            <th>Table ID</th>
                            <th>Date and Time</th>
                            <th>Booking Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                            <tr class="bs" style="text-align:center;">
                                <td>
                                    <?= $booking['booking_products_id'] ?>
                                </td>
                                <td>
                                    <?= $booking['user_id'] ?>
                                </td>
                                <td>
                                    <?= $booking['booking_id'] ?>
                                </td>
                                <td>
                                    <?= $booking['product_id'] ?>
                                </td>
                                <td>
                                    <?= $booking['table_id'] ?>
                                </td>
                                <td>
                                    <?= $booking['datetime'] ?>
                                </td>
                                <td>
                                    <?= $booking['booking_total'] ?>
                                </td>
                                <td>
                                    <a href="/bookings/detail?booking_id=<?= $booking['booking_id'] ?>">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>