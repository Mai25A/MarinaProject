<?php 
$id = $_GET['id'];
include'../../views/partials/head.php';
include '../../models/menu.model.php';
$product = getProductById($id);
?>
<form action="../../controllers/menu/menu.update.controller.php" method="post">
<input type="hidden" name="id" value="<?=$id?>">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= isset($product['name']) ? $product['name'] : '' ?>">
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" class="form-control" id="image" name="image" value="<?= isset($product['image']) ? $product['image'] : '' ?>">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" value="<?= isset($product['price']) ? $product['price'] : '' ?>">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"><?= isset($product['description']) ? $product['description'] : '' ?></textarea>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <textarea class="form-control" id="category_id" name="category_id"><?= isset($product['category_id']) ? $product['category_id'] : '' ?></textarea>
    </div>
    <div class="form-group">
        <div class="d-flex p-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
<?php include '../../views/partials/footer.php';?>