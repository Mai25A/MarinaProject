<?php
require_once '../css/acount/bokingtable.css.php';
require_once '../../controllers/account/bookintable.controller.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div> 
        <h3>Booking table</h3>
    </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $table['image']; ?>" class="img-fluid rounded-start" alt="tables name">
                </div>
                <?php foreach ($tables as $table) : ?>
                <div class="col-md-8 infomation">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $table['name']; ?></h5>
                        <p class="card-text"><?php echo $table['table_type_id']; ?></p>
                        <p class="card-text">Booking time 
                            <?php
                                // Lặp qua mảng booking của bảng hiện tại
                                foreach ($table['bookings'] as $booking) {
                                    echo $booking['datetime'];
                                }
                            ?></p>
                        <hr>
                        <p class="card-text">Total Deposit amount
                        <?php
                        foreach ($table['bookings'] as $booking) {
                                    echo $booking['total'];
                                }
                        ?>
                        </p>
                        <hr>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>