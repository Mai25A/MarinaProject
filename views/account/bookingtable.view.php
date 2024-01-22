<?php
require_once 'views/partials/link.php';
require_once 'views/css/acount/bokingtable.css.php';
?>

<body>
    <div class="container">
        <div class="row text-center mt-5">
            <h3>Booking history</h3>
        </div>
        <div class="row mt-5">
            <?php foreach ($tables as $table): ?>
                <div class="card shadow col-5 ms-5 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $table['image']; ?>" class="img-fluid rounded-start mt-5" alt="tables name">
                        </div>
                        <div class="col-md-8 infomation">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $table['name']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $table['table_type_id']; ?>
                                </p>
                                <p class="card-text">Booking time
                                    <?php
                                    echo $table['datetime'];
                                    ?>
                                </p>
                                <p class="card-text">Status
                                    <?php
                                    $bookingtime = strtotime($table['datetime']);

                                    if (date("Y-m-d H:i:s", $bookingtime) < date("Y-m-d H:i:s")) {
                                        echo "booked";
                                    } else {
                                        echo "waiting";
                                    }
                                    ?>
                                </p>
                                <hr>
                                <p class="card-text">Total Deposit amount
                                    <?php
                                    echo $table['total'];
                                    ?>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>