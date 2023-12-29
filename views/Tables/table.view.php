<?php
    require_once('../../views/partials/head.php');
    require_once('../../views/css/table.css.php');
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
                        // Xây dựng URL dựa trên loại được chọn
                        var url = '?type=' + encodeURIComponent(type);

                        // Chuyển hướng đến URL
                        window.location.href = url;
                    }
                </script>
            </div>
            <div class="col-md-6 select_cus ">
                <select class="form-select custom-button" aria-label="Default select example">
                    <option selected>Quantity</option>
                    <option value="1">2 Customers</option>
                    <option value="2">5 Customers </option>
                    <option value="3">10 Customers</option>
                    <option value="3">15 Customers</option>
                </select>
            </div>
        </div>
        <div class="container-fluid box_products d-flex gap-5">
        <?php foreach($tables as $table): ?>
            <div class="row ms-1">
            <div class="card list-item" style="width: 25rem; margin-top:48px">
                <div class="image-item">
                    <img src="<?=  $table['image']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="row card-body align-items-center">
                    <div class="col-md-7">
                            <h5 class="card-title"><?= $table['name'] ?></h5>
                            <p class="card-text">Number of tale: <?=  $table['id'] ?></p>
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
                        <p class="card-text text-end"><?php echo htmlspecialchars($table['price']) ?> VND</p>
                        <p class="card-text text-center" style="color: red;"><i class="fa fa-heart-o fa-2x""></i></></p>
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