<?php
    require_once dirname(dirname(__DIR__))."../../views/partials/head.php";
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="../../../models/User/post.model.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <input type="text" placeholder="phone" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <input type="text" placeholder="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <input type="text" placeholder="password" class="form-control" name="password">
            </div> <div class="form-group">
                <input type="text" placeholder="image" class="form-control" name="image">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>
