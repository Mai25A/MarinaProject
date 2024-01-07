<?php require_once "../../views/partials/head.php"; ?>

<div class="container p-4">
    <div class="d-flex justify-content-end p-2">
        <a href="../../views/user/post.create.view.php" class="btn btn-primary">Add +</a>
    </div>
    <?php foreach ($users as $user): ?>
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="<?php echo $user['image']; ?>" alt="">
                    </div>
                    <div class="info">
                        <h6 class="display-4">
                            <?php echo $user['name']; ?>
                        </h6>
                        <p>
                            <?php echo $user['phone']; ?>
                        </p>
                        <p>
                            <?php echo $user['password']; ?>
                        </p>
                        <img src="" <?php echo $user['image']; ?> alt="">
                    </div>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="../../controllers/user/post.update.controller.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm mr-2"><i
                            class="fa fa-pencil"></i></a>
                    <a href="../../controllers/user/post.delete.controller.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm"><i
                            class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require "../../views/partials/footer.php"; ?>