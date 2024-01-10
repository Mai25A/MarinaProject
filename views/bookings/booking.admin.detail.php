<!DOCTYPE html>
<html>

<head>
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4>Total Amount
            <?= $bookings[0]['bp_total_amount']; ?>
        </h4>

        <div class="row">
            <div class="col-md-4">
                <label for="full-name">Full Name:</label>
                <input type="text" class="form-control" id="full-name" value="<?= $bookings[0]['user_name']; ?>">
            </div>
            <div class="col-md-4">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="<?= $bookings[0]['user_email']; ?>">
            </div>
            <div class="col-md-4">
                <label for="booking-datetime">Booking Datetime:</label>
                <input type="datetime-local" class="form-control" id="booking-datetime"
                    value="<?= $bookings[0]['datetime']; ?>">
            </div>
        </div>

        <p>Information of booking:</p>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <h4 class="card-title">Table information</h4>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= $bookings[0]['table_image']; ?>" class="card-img" alt="Product Image">
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">Name: <?= $bookings[0]['table_name']; ?></p>
                                <p class="card-text">Table for <?= $bookings[0]['table_id'];?></p>
                                <p class="card-text">Price: <?= $bookings[0]['table_price']; ?> VND</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <h4 class="card-title">Dishes information</h4>
                    <hr>
                    <?php foreach ($bookings as $booking): ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= $booking['product_image']; ?>" class="card-img" alt="Product Image">
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">Name: <?= $booking['product_name']; ?></p>
                                <p class="card-text">Price: <?= $booking['product_price'];?> VND</p>
                                <p class="card-text">Quantity: <?= $booking['bp_quantity']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>