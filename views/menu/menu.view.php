<?php
require_once 'views/partials/head.php';
require_once 'views/partials/link.php';
require_once 'views/css/menu/menu.css.php';
?>
<div class="container-fluid">
    <div class="title">
        <button class="underline button" onclick="redirectToURL(1)">Seafood</button>
        <button class="underline button" onclick="redirectToURL(2)">Fruits</button>
        <button class="underline button" onclick="redirectToURL(3)">Drinks</button>
    </div>
    <div class="row card_menu">
        <?php $counter = 0; ?>
        <?php foreach ($menuByCategory as $value) { ?>
            <div class="col-md-4">
                <a href="/menu/detail?id=<?= $value['id'] ?>">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= $value['image'] ?>" alt="Product Image">
                        </div>
                        <div class="card-body">
                            <h5>
                                <?= $value['name'] ?>
                            </h5>
                            <p class="price">
                                <?= $value['price'] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php $counter++; ?>
            <?php if ($counter % 3 == 0) { ?>
            </div>
            <?php if ($counter < count($menuByCategory)) { ?>
                <div class="row card_menu">
                <?php }
            }
        } ?>
    </div>
</div>
<?php require_once 'views/partials/footer.php'; ?>
<script>
    function redirectToURL(categoryId) {
        window.location.href = '/menu/web?type=' + categoryId;
    }
</script>