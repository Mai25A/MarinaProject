<?php 
$id = $_GET['id'];
require_once "views/partials/link.php";  
$product = getProductById($id);
?>
<form action="/menu/update" method="post">
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

<style>
    form {
        max-width: 720px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 2rem; /* Adjusted margin for spacing */
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px; /* Adjusted margin for spacing */
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        justify-content: center; /* Center the text in the button */
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Additional styling for labels and spacing */
    label {
        display: block;
        margin-bottom: 5px;
    }

    textarea.form-control {
        resize: vertical;
    }
</style>
