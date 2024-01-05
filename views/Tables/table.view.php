<?php
require_once('../../views/partials/head.php');
require_once('../../views/css/tables/table.css.php');
print_r($tables);
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 button_con">
                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button normal" aria-label="Close"
                        onclick="redirectToURL('normal')">Normal tables</button>
                </div>

                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button room" aria-label="Close"
                        onclick="redirectToURL('room')">Private rooms</button>
                </div>

                <script>
                    function redirectToURL(type) {
                        var selectElement = document.querySelector('.form-select');
                        var quantity = selectElement.value;

                        var url = '?type=' + encodeURIComponent(type)+ '&number_of_seat=' + encodeURIComponent(quantity);

                        window.location.href = url;
                    }
                </script>
            </div>
            <div class="col-md-6 select_cus">
                <?php if (isset($_GET['type'])) {
                    if ($_GET['type'] == 'normal') { ?>
                        <select class="form-select custom-button" aria-label="Default select example" onchange="redirectToQuantity(this.value)">
                            <option selected>Quantity</option>
                            <option value="1">2 Customers</option>
                            <option value="2">5 Customers</option>
                            <option value="3">10 Customers</option>
                            <option value="4">15 Customers</option>
                        </select>
                    <?php } else if ($_GET['type'] == 'room') { ?>
                            <select class="form-select custom-button" aria-label="Default select example" onchange="redirectToQuantity(this.value)">
                                <option selected>Quantity</option>
                                <option value="5">10 Customers</option>
                                <option value="6">15 Customers</option>
                                <option value="7">20 Customers</option>
                            </select>
                    <?php }
                } else { ?>
                    <select class="form-select custom-button" aria-label="Default select example" onchange="redirectToQuantity(this.value)">
                        <option selected>Quantity</option>
                        <option value="1">2 Customers</option>
                        <option value="2">5 Customers</option>
                        <option value="3">10 Customers</option>
                        <option value="4">15 Customers</option>
                        <option value="5">10 Customers</option>
                        <option value="6">15 Customers</option>
                        <option value="7">20 Customers</option>
                    <?php } ?>
            </div>
            <script>
                function redirectToQuantity(quantity) {
                    var selectElement = document.querySelector('.form-select');
                    var type = "<?php echo isset($_GET['type']) ? $_GET['type'] : ''; ?>";

                    // Xây dựng URL dựa trên loại và giá trị "quantity" được chọn
                    var url = '?type=' + encodeURIComponent(<?= $_GET['type'];?>) + '&number_of_seat=' + encodeURIComponent(quantity);

                    // Chuyển hướng đến URL
                    window.location.href = url;
                }
            </script>
        </div>
        <div class="container-fluid box_products d-flex gap-5">
            <?php foreach ($tables as $table): ?>
                <div class="row ms-1">
                    <div class="card list-item" style="width: 25rem; margin-top:48px">
                        <div class="image-item">
                            <img src="<?= $table['image']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="row card-body align-items-center">
                            <div class="col-md-7">
                                <h5 class="card-title">
                                    <?= $table['name']; ?>
                                </h5>
                                <p class="card-text">Number of table:
                                    <?= $table['id']; ?>
                                </p>
                                <p class="card-text">
                                    <?php
                                    if ($table['table_type_id'] < 5) {
                                        echo "Table for " . $table['number_of_seat'];
                                    } else {
                                        echo "Private room for " . $table['number_of_seat'];
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-5 card-price">
                                <p class="card-text text-end">
                                    <?php echo $table['price']; ?> VND
                                </p>
                                <p class="card-text text-center" style="color: red;"><i class="fa fa-heart-o fa-2x"></i></></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
</body>
<?php
require_once('../../views/partials/footer.php');
?>