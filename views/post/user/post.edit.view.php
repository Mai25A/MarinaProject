<?php require dirname(dirname(__DIR__)) ."../../views/partials/head.php" ?>

<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/post/user/post.update.controller.php" method="post">
            <input type="hidden" value="<?= $post['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name" value="<?= $post['name'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="phone" name="phone"><?= $post['phone'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" placeholder="eamil" class="form-control" name="email" value="<?= $post['email'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="password" name="password"><?= $post['password'] ?></textarea>
            </div><div class="form-group">
                <input type="text" placeholder="img" class="form-control" name="image" value="<?= $post['image'] ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php require dirname(dirname(__DIR__)) ."../../views/partials/footer.php" ?>