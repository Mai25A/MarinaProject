<?php
$id = $_GET['id'];
include_once("../../views/partials/head.php");
include_once("../../models/tables.model.php");
$table = get_one_table($id);
// print_r($table);
?>

<form action="../../controllers/tables/table.update.controller.php" method="get">
    <input type="hidden" name='id' value="<?=$id?>">
    
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
    <select class="form-control" id="category" name="type" value="<?= $table['type'] ?>">
      <option value="normal">Normal Table</option>
      <option value="room">Private room</option>
    </select>
  </div>
  <div class="form-group" id="seat-group" style="display: none;">
    <label for="seats">Number of Seats:</label>
    <select class="form-control" id="normal-seats" name="table_type_id" style="display: none;">
      <option value="1">Table for 2</option>
      <option value="2">Table for 5</option>
      <option value="3">Table for 10</option>
      <option value="4">Table for 15</option>
    </select>
    <select class="form-control" id="room-seats" name="table_type_id" style="display: none;">
      <option value="5">Table for 10</option>
      <option value="6">Table for 15</option>
      <option value="7">Table for 20</option>
    </select>
  </div>
  <script>
  // Lắng nghe sự kiện thay đổi của trường "Type"
  var typeSelect = document.getElementById('category');
  var seatsGroup = document.getElementById('seat-group');
  var normalSeatsSelect = document.getElementById('normal-seats');
  var roomSeatsSelect = document.getElementById('room-seats');

  typeSelect.addEventListener('change', function() {
    if (typeSelect.value === 'normal') {
      // Nếu lựa chọn là "Normal Table", hiển thị trường "Number of Seats" cho bàn thông thường
      seatsGroup.style.display = 'block';
      normalSeatsSelect.style.display = 'block';
      roomSeatsSelect.style.display = 'none';
    } else if (typeSelect.value === 'room') {
      // Nếu lựa chọn là "Private Room", hiển thị trường "Number of Seats" cho phòng riêng
      seatsGroup.style.display = 'block';
      normalSeatsSelect.style.display = 'none';
      roomSeatsSelect.style.display = 'block';
    } else {
      // Nếu không có lựa chọn nào được chọn, ẩn trường "Number of Seats"
      seatsGroup.style.display = 'none';
      normalSeatsSelect.style.display = 'none';
      roomSeatsSelect.style.display = 'none';
    }
  });
</script>
 
  <button type="submit" class="btn btn-primary">Create</button>
</form>