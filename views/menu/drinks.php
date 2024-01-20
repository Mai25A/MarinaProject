<?php
require_once 'views/css/menu.css.php';
require_once 'controllers/menu/menu.controller.php';
?>
<div class="container">
    <?php foreach ($menu as $value) {
        if ($value['category_id'] == 3) { ?>
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= $value['image'] ?>" alt="Product Image" style="width:100%">
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>