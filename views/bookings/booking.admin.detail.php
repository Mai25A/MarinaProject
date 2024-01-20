<?php
include('../../views/css/bookings/booing.admin.detail.php');?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<body>
    <div class="container mt-4">
        <h4>Total Amount
            <?= $bookings[0]['booking_total']; ?>
        </h4>
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <label for="full-name">Full Name:</label>
                    <input type="text" class="form-control no-edit" id="full-name" value="<?= $bookings[0]['user_name']; ?>">
                </div>
                <div class="col-md-4">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control no-edit" id="email" value="<?= $bookings[0]['user_email']; ?>">
                </div>
                <div class="col-md-4">
                    <label for="booking-datetime">Booking Datetime:</label>
                    <input type="datetime-local" class="form-control no-edit" id="booking-datetime"
                        value="<?= $bookings[0]['datetime']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row mt-4">
                <label class="bking_ifor"><strong>Information of your booking:</strong></label>
            </div>
            <div class="row ms-4 mt-4 d-flex gap-5">
                <div class="col-5 table_box shadow mb-3">
                    <h4 class="card-title mt-3 text-center">Table information</h4>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="table_id" value="<?= $table['id']; ?>">
                            <div class="col-4 img_bx">
                                <img src="<?= $bookings[0]['table_image']; ?>" class="card-img" alt="Product Image">
                            </div>
                            <div class="col-8">
                                <p class="card-text">Name:
                                    <?= $bookings[0]['table_name']; ?>
                                </p>
                                <p class="card-text">Number of table:
                                    <?= $bookings[0]['table_id']; ?>
                                </p>
                                <p class="card-text">Price:
                                    <?= $bookings[0]['table_price']; ?> VND
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 shadow mb-3">
                    <h4 class="card-title mt-3 text-center">Dishes information</h4>
                    <hr>
                    <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                        <?php foreach ($bookings as $booking) {
                            ?>
                            <div class="row mt-1">
                                <div class="col-4 img_bx">
                                    <img src="<?= $booking['product_image']; ?>" class="card-img" alt="Product Image">
                                </div>
                                <div class="col-8">
                                    <p class="card-text">Name:
                                        <?= $booking['product_name']; ?>
                                    </p>
                                    <p class="card-text">Price:
                                        <?= $booking['product_price']; ?> VND
                                    </p>
                                    <p class="card-text">Quantity:
                                        <?= $booking['bp_quantity']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>