<?php
require_once('views/partials/head.php');
require_once('views/partials/link.php');
require_once('views/css/tables/table.css.php');
?>

<body>
    <div class="container-fluid tb-container">
        <div class="row">
            <div class="col-md-6 d-flex">
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
        <div class="row box_products d-flex flex-wrap mt-2">
            <?php foreach ($tables as $table): ?>
                <div class="card-item-tb col-md-4 mt-4">
                    <a href="/tables/detail?id=<?= $table['id'] ?>">
                        <div class="card list-item">
                            <div class="image-item">
                                <img src="<?= $table['image']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="row card-body align-items-center">
                                <div class="col-7">
                                    <div class="row">
                                        <h5 class="card-title">
                                            <?php
                                            $name = $table['name'];
                                            $maxLength = 15;
                                            echo strlen($name) > $maxLength ? substr($name, 0, $maxLength) . '...' : $name;
                                            ?>
                                        </h5>
                                    </div>
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
                                <div class="col-5 card-price">
                                    <p class="card-text text-end price_tx">
                                        <strong><?php echo $table['price']; ?> VND</strong>
                                    </p>
                                    <p class="card-text text-center"><i class="fa fa-heart-o fa-2x"></i></></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<?php
require_once('views/partials/footer.php');
?>