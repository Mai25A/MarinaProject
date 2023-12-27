<?php
    require_once('../partials/head.php');
    require_once('../css/table.css.php');
?> 

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 button_con">
                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button normal " aria-label="Close">Normal tables</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn_type custom-button room" aria-label="Close">Private rooms</button>
                </div>
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
        <?php foreach($tables as $table): ?>
            <div class="row">
            <div class="card list-item" style="width: 25rem; margin-top:48px">
                <div class="image-item">
                    <img src="<?=  $table['image']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="row card-body align-items-center">
                    <div class="col-md-7">
                            <h5 class="card-title"><?= $table['name'] ?></h5>
                            <p class="card-text">Number of tale: <?=  $table['id'] ?></p>
                            <p class="card-text">Private room for five</p>
                    </div>
                    <div class="col-md-5 card-price">
                        <p class="card-text text-end">50.000 VND</p>
                        <p class="card-text text-center" style="color: red;"><i class="fa fa-heart-o fa-2x""></i></></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
<?php
    require_once('../partials/footer.php');
?>