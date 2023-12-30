<!DOCTYPE html>
<html>

<head>
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h4>Total Amount
            <?= $booking['booking_total']; ?>
        </h4>

        <div class="row">
            <div class="col-md-4">
                <label for="full-name">Full Name:</label>
                <input type="text" class="form-control" id="full-name" value="<?= $booking['user_name']; ?>">
            </div>
            <div class="col-md-4">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="<?= $booking['user_email']; ?>">
            </div>
            <div class="col-md-4">
                <label for="booking-datetime">Booking Datetime:</label>
                <input type="datetime-local" class="form-control" id="booking-datetime"
                    value="<?= $booking['datetime']; ?>">
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
                                <img src="<?= $booking['table_image']; ?>" class="card-img" alt="Product Image">
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">Name: Product Name</p>
                                <p class="card-text">Type: Product Type</p>
                                <p class="card-text">Price: $99.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <h4 class="card-title">Dishes information</h4>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= $booking['product_image']; ?>" class="card-img" alt="Product Image">
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">Name: Product Name</p>
                                <p class="card-text">Type: Product Type</p>
                                <p class="card-text">Price: $99.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>