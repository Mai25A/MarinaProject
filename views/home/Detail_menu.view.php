<?php
    require_once('../../views/partials/head.php');
    require_once('../css/detail_menu.css.php');
?>
<body>
    <form>
        <div class="container mt-5">
            <div class="left">
                <img src="<?= $productInfo['image'] ?>" alt="Ảnh nhà hàng" class="image">
            </div>
            <div class="right">
                <div>
                    <h1><?= $productInfo['name'] ?></h1>
                    <p><span class="description">Price: <?= $productInfo['price'] ?></span></p>
                    <p><span class="description">Description: </span><?= $productInfo['description'] ?></p>
                </div>
            </div>
        </div>
    </form>
</body>

<?php require_once('../../views/partials/footer.php'); ?>