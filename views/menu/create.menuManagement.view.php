<?php 
require '../../views/partials/head.php';
require '../../controllers/menu/create.menuManagement.controllers.php'
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/menu/create.menuManagement.controllers.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="URL image" name="image"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Price" name="price"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Category" name="category"></textarea>
            </div>
            <div class="form-group">
                <div class="d-flex p-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>