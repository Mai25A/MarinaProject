<?php
require_once('views/partials/head.php');
require_once('controllers/menu/menu.detail.controller.php');
require_once('views/css/menu/menu.detail.css.php');
?>

<body>
    <form action="/tables/web">
        <div class="container mt-5">
            <div class="left">
                <img src="<?= $menu['image'] ?>" alt="Ảnh nhà hàng" class="image">
            </div>
            <div class="right">
                <div>
                    <h1>
                        <?= $menu['name'] ?>
                    </h1>
                    <p><span class="description">Price:
                            <?= $menu['price'] ?>
                        </span></p>
                    <p><span class="description">Description: </br></span>
                        <?= $menu['description'] ?>
                    </p>
                    <div class="btn_table d-flex justify-content-center align-items-center mt-4">
                        <button class="btn btn-danger" >Go to booking now!</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<?php require_once('views/partials/footer.php'); ?>