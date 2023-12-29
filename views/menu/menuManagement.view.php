<?php
require_once('../../views/partials/head.php');
include_once('../../views/css/menu/menu.admin.css.php');
?>
<form action="" method="POST">
    <div class="container p-4">
        <div class="d-flex p-2">
            <a href="" class="btn btn-primary">Create new dishes</a>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($menu as $value) {
                    ?>
                        <tr>
                            <th scope="row"><?= $value['id'] ?></th>
                            <td><?= $value['name'] ?></td>
                            <td>
                                <div class="img_menu">
                                    <img src="<?= $value['image'] ?>" alt="">
                                 </div>
                            </td>
                            <td><?= $value['price'] ?></td>
                            <td><?= $value['description'] ?></td>
                            <td><?= $value['category_id'] ?></td>
                            <td>
                                <a href="" class="btn btn-primary btn-lg"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<?php
require_once('../partials/footer.php');
?>