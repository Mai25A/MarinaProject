<?php
require '../../views/partials/head.php';
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/menu/create.admin.controller.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <textarea class="form-control" id="Category" name="category"></textarea>
            </div>
            <!-- <div class="form-group" id="seat-group">
                <label for="category">Category:</label>
                <select class="form-control" id="normal-seats" name="category">
                    <option value="1">Seafood</option>
                    <option value="2">fruits</option>
                    <option value="3">drink</option>
                </select>
            </div> -->
            <div class="form-group">
                <div class="d-flex p-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require '../../views/partials/footer.php';
?>