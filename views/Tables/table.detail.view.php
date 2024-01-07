<?php
include("../../views/partials/head.php");
include("../../views/css/tables/table.detail.php");
print_r($table);
?>

<body>
    <div class="container-lg">
        <div class="row detail_item">
            <div class="col-lg-5 image_dt">
                <img src="<?php echo $table['image']; ?>" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="row name_price">
                    <h3 class="col-8">
                        <?php echo $table['name']; ?>
                    </h3>
                    <h4 class="col-4 price">
                        <?php echo $table['price']; ?> VND
                    </h4>

                </div>
                <div class="row">
                    <div class="col-6">
                        <p>
                            <?php
                            if ($table['table_type_id'] < 5) {
                                echo "Table for " . $table['number_of_seat'];
                            } else {
                                echo "Private room for " . $table['number_of_seat'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Dishes Deposit Amount:</p>
                    </div>
                    <div class="col-6">
                        <p class="dispoint">50000 VND</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Total Deposit Amount:</p>
                    </div>
                    <div class="col-6">
                        <p class="total_dispoint">$150</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Description:</h4>
                        <p>
                            <?php echo $table['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center bg-primary btn_chosen">
            <div class="col-6 d-flex justify-content-center">
                <button class="btn btn-primary">Booking now</button>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <button class="btn btn-secondary">Choose menu</button>
            </div>
        </div>
        <div class="row list_menu">

        </div>
    </div>
</body>
<?php
include("../../views/partials/footer.php");
?>