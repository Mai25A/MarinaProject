<?php
    include_once("../../views/partials/head.php");
?>

<form action="../../controllers/tables/table.admin.controller.php" method="POST">
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
    <label for="category">Type:</label>
    <select class="form-control" id="category" name="type">
        <option value="normal">Normal Table</option>
        <option value="room">Private room</option>
    </select>
  </div>
  <div class="form-group" id="seat-group">
    <label for="seats">Number of Seats:</label>
    <select class="form-control" id="seats" name="table_type_id">
      <?php
        $selectedCategory = $_POST["type"];
        if ($selectedCategory == "normal") {
            echo '<option value="1">Table for 2</option>';
            echo '<option value="2">Table for 5</option>';
            echo '<option value="3">Table for 10</option>';
            echo '<option value="4">Table for 15</option>';
        } elseif ($selectedCategory == "room") {
            echo '<option value="5">Table for 10</option>';
            echo '<option value="6">Table for 15</option>';
            echo '<option value="7">Table for 20</option>';
        }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>