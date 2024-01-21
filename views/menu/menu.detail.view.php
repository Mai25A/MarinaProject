<?php
    require_once('controllers/menu/menu.detail.controller.php');
    require_once('views/css/menu/menu.detail.css.php');
?>
<body>
    <form>
        <div class="container mt-5">
            <div class="left">
                <img src="<?=$menu['image'] ?>" alt="Ảnh nhà hàng" class="image">
            </div>
            <div class="right">
                <div>
                    <h1><?=$menu['name'] ?></h1>
                    <p><span class="description">Price: <?=$menu['price'] ?></span></p>
                    <p><span class="description">Description: </span><?=$menu['description'] ?></p>
                </div>
            </div>
        </div>
    </form>
</body>