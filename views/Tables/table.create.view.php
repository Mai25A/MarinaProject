<?php
require_once "views/partials/link.php";
?>

<form action="/tables/create" method="POST">
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
  <button type="submit" class="btn btn-primary">Create</button>
</form>

<style>
    form {
        max-width: 720px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 5rem; /* Adjusted margin for spacing */
    }

    .form-group {
        margin-bottom: 15px;
    }
   button .btn{
    display: flex;
    justify-content: center;
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
<script>
    // Lắng nghe sự kiện thay đổi của trường "Type"
    var typeSelect = document.getElementById('category');
    var seatsGroup = document.getElementById('seat-group');
    var normalSeatsSelect = document.getElementById('normal-seats');
    var roomSeatsSelect = document.getElementById('room-seats');

    typeSelect.addEventListener('change', function () {
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
<!-- 
<script>
  var urlParams = new URLSearchParams(window.location.search);
  var typeParam = urlParams.get('type');


  if (typeParam) {
      document.getElementById("category").value = typeParam;
  }

  // Lắng nghe sự kiện khi người dùng chọn một lựa chọn mới
  document.getElementById("category").addEventListener("change", function() {
      var selectedType = this.value;

      // Chuyển hướng đến trang tiếp theo với giá trị "type" mới
      window.location.href = "table.create.controller.php?type=" + selectedType;
  });
</script> -->