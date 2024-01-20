<?php
    require_once "../../views/css/user/create.css.php";
?>
<div class="contain card mt-5">
    <div class="card-body">
        <form action="../../controllers/user/post.create.controller.php" method="get">
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
                <button class="btn btn-block btn-primary">Add users</button>
            </div>
        </form>
    </div>
</div>