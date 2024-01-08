<?php
$id = $_GET['id'];
include_once("../../views/partials/head.php");
include_once("../../models/tables.model.php");
$table = get_one_table($id);
// print_r($table);
?>
<form action="../../controllers/tables/table.update.controller.php" method="get" id="tableForm">
  <input type="hidden" name='id_update' value="<?= $id ?>">

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value='<?= $table['name'] ?>'>
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" id="image" name="image" value='<?= $table['image'] ?>'>
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" id="price" name="price" value="<?= $table['price'] ?>">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description"><?= $table['description'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="category">Type:</label>
    <select class="form-control" id="category" name="type">
        <option value="normal">Normal Table</option>
        <option value="room">Private room</option>
    </select>
</div>
<div class="form-group" id="seat-group">
    <label for="normal-seats">Number of Seats:</label>
    <select class="form-control" id="normal-seats" name="table_type_id">
        <option  value="1">Table for 2</option>
        <option value="2">Table for 5</option>
        <option value="3">Table for 10</option>
        <option value="4">Table for 15</option>
        <option value="5" style="display:none">Table for 10 (Room)</option>
        <option value="6" style="display:none">Table for 15 (Room)</option>
        <option value="7" style="display:none">Table for 20 (Room)</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Update</button>

<script>
    document.getElementById('category').addEventListener('change', function () {
        var selectedValue = this.value;
        var normalSeats = document.getElementById('normal-seats');

        // Reset the options
        normalSeats.options[2].style.display = 'block'; // Table for 10
        normalSeats.options[3].style.display = 'block'; // Table for 15

        if (selectedValue === 'normal') {
            // normalSeats.style.display = 'block';
            normalSeats.options[0].style.display = 'block'; // Table for 10
            normalSeats.options[1].style.display = 'block'; // Table for 10
            normalSeats.options[2].style.display = 'block'; // Table for 10
            normalSeats.options[3].style.display = 'block';
            normalSeats.options[4].style.display = 'none'; // Table for 10 (Room)
            normalSeats.options[5].style.display = 'none'; // Table for 15 (Room)
            normalSeats.options[6].style.display = 'none'; // Table for 20 (Room)
        }
        if (selectedValue === 'room') {
            // normalSeats.style.display = 'block';
            normalSeats.options[4].style.display = 'block'; // Table for 10 (Room)
            normalSeats.options[5].style.display = 'block'; // Table for 15 (Room)
            normalSeats.options[6].style.display = 'block';
            normalSeats.options[0].style.display = 'none'; // Table for 10
            normalSeats.options[1].style.display = 'none'; // Table for 10
            normalSeats.options[2].style.display = 'none'; // Table for 10
            normalSeats.options[3].style.display = 'none'; // Table for 15
        }
    });
</script>
