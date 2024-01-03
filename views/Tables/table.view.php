<?php
require_once('../../views/partials/head.php');
require_once('../../views/css/tables/table.css.php');
    print_r($tables);
?>

<body>
    <div class="container-fluid bg-light">
        <div class="row p-5">
            <div class="col-md-6 button_con">
                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button normal" aria-label="Close"
                        onclick="redirectToTableType('normal')">Normal tables</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button room" aria-label="Close"
                        onclick="redirectToTableType('room')">Private rooms</button>
                </div>
                <script>
                    function redirectToTableType(type) {
                        var currentUrl = window.location.href;
                        var parameterPrefix = currentUrl.includes('?') ? '&' : '?';
                        var newUrl;
                        if (currentUrl.includes('type=')) {
                            newUrl = currentUrl.replace(/(type=)[^\&]+/, `$1${encodeURIComponent(type)}`);
                        } else {
                            newUrl = currentUrl + parameterPrefix + 'type=' + encodeURIComponent(type);
                        }

                        window.location.href = newUrl;

                    }
                </script>
            </div>
            <div class="col-md-6 select_cus">
                <?php if (isset($_GET['type']) && $_GET['type'] != null) {
                    if ($_GET['type'] == 'normal') { ?>
                        <select class="form-select custom-button" aria-label="Default select example"
                            onchange="redirectToQuantity(this.value)">
                            <option selected>Quantity</option>
                            <option value="2">2 Customers</option>
                            <option value="5">5 Customers</option>
                            <option value="10">10 Customers</option>
                            <option value="15">15 Customers</option>
                        </select>
                    <?php } else if ($_GET['type'] == 'room') { ?>
                            <select class="form-select custom-button" aria-label="Default select example"
                                onchange="redirectToQuantity(this.value)">
                                <option selected>Quantity</option>
                                <option value="10">10 Customers</option>
                                <option value="15">15 Customers</option>
                                <option value="20">20 Customers</option>
                            </select>
                    <?php }
                } else { ?>

                    <select class="form-select custom-button" aria-label="Default select example"
                        onchange="redirectToQuantity(this.value)">
                        <option selected>Quantity</option>
                        <option value="2">2 Customers</option>
                        <option value="5">5 Customers</option>
                        <option value="10">10 Customers</option>
                        <option value="15">15 Customers</option>
                        <option value="20">20 Customers</option>
                    </select>
                <?php } ?>
            </div>
            <script>
                function redirectToQuantity(quantity) {
                    console.log(quantity);
                    var currentUrl = window.location.href;
                    var parameterPrefix = currentUrl.includes('?') ? '&' : '?';
                    var newUrl;
                    if (currentUrl.includes('number_of_seat=')) {
                        newUrl = currentUrl.replace(/(number_of_seat=)[^\&]+/, `$1${encodeURIComponent(quantity)}`);
                    } else {
                        newUrl = currentUrl + parameterPrefix + 'number_of_seat=' + encodeURIComponent(quantity);
                    }
                    window.location.href = newUrl;
                }
            </script>
        </div>
        <div class="container-fluid box_products">
            <?php foreach ($tables as $table): ?>
                <!-- <div class="col-md-3 ms-1 list_tble"> -->
                <a href="../../controllers/tables/table.detail.controller.php?id=<?= $table['id'] ?>">
                    <div class="card list-item">
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
                                <p class="card-text text-center"><i class="fa fa-heart-o fa-2x""></i></></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- </div> -->
            <?php endforeach; ?>
        </div>
    </div>
</body>
<?php
require_once('../../views/partials/footer.php');
?>