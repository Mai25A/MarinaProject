<?php require_once "/PHP_project/MarinaProject/views/partials/link.php";  ?>
<div class="card mt-5">
    <div class="card-body">
        <form method="post">
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
            <div class="form-group" id="seat-group">
                <label for="category">Category:</label>
                <select class="form-control" id="normal-seats" name="category_id">
                    <option value="1">Seafood</option>
                    <option value="2">fruits</option>
                    <option value="3">drink</option>
                </select>
            </div>
            <div class="form-group">
                <div class="d-flex p-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    .card {
        max-width: 720px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 5rem; /* Adjusted margin for spacing */
    }

    .card-body {
        text-align: left; /* Align form elements to the left */
    }

    .form-group {
        margin-bottom: 15px;
    }
    .form-group button{
        margin-bottom: 15px;
        width: 100px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    select.form-control {
        padding: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 50%; /* Center the button */
        transform: translateX(-50%);
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
