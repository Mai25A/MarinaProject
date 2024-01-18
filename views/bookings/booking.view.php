<body>
  <div class="container mt-4">
    <div class="row message">
      <h1>For bookings of 16 or more guests please give us a call directly on <b>+84(0) 33982406</b></h1>
    </div>
    <div class="row">
      <div class="col-7 mt-5 ifor_check">
        <div class="row infor">
          <div class="row mb-3">
            <div class="col-6">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control grayed-out" id="fullName" value="<?php echo $user['name'] ?>"
                readonly>
            </div>
            <div class="col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control grayed-out" id="email" value="<?php echo $user['email'] ?>"
                readonly>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control grayed-out" id="phoneNumber" value="<?php echo $user['phone'] ?>"
                readonly>
            </div>
            <div class="col-6">
              <label for="date">Select Date</label>
              <input type="date" class="form-control date" name="date" id="date" placeholder="Enter a datetime">
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="row">
            <label class="bking_ifor" style="padding-left: 10px;"><strong>Select Time</strong></label>
          </div>
          <div class="row d-flex mb-3 justify-content-center">
            <div class="col-9 d-flex flex-column justify-content-end mt-2  time_pick">
              <div class="row d-flex gap-4 mt-2 line1">
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time1" value="9" autocomplete="off">
                  <label class="btn" for="time1">9:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time2" value="10" autocomplete="off">
                  <label class="btn" for="time2">10:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time3" value="11" autocomplete="off">
                  <label class="btn" for="time3">11:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time4" value="12" autocomplete="off">
                  <label class="btn" for="time4">12:00</label>
                </div>
              </div>
              <div class="row d-flex gap-4 line2 mt-3">
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time5" value="13" autocomplete="off">
                  <label class="btn" for="time5">13:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time6" value="14" autocomplete="off">
                  <label class="btn" for="time6">14:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time7" value="15" autocomplete="off">
                  <label class="btn" for="time7">15:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time8" value="16" autocomplete="off">
                  <label class="btn" for="time8">16:00</label>
                </div>
              </div>
              <div class="row d-flex gap-4 line3 mt-3">
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time9" value="17" autocomplete="off">
                  <label class="btn" for="time9">17:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time10" value="18"
                    autocomplete="off">
                  <label class="btn" for="time10">18:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time11" value="19"
                    autocomplete="off">
                  <label class="btn" for="time11">19:00</label>
                </div>
                <div class="col-2">
                  <input type="radio" class="btn-check time-label" name="time" id="time12" value="20"
                    autocomplete="off">
                  <label class="btn" for="time12">20:00</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-5 d-flex justify-content-end mt-5">
        <div class="col-10 res_infor d-flex flex-column justify-content-center align-items-center shadow">
          <h4 class="title mt-2">Our location</h4>
          <p class="title mt-2 text-center">My Khe 5 street, Phuoc My, Son Tra, Da Nang, Viet Nam</p>
          <h4 class="title mt-3">Contact information</h4>
          <p class="title mt-2"><strong>Phone:</strong> +84(0) 5525 90252</p>
          <p class="title mt-2"><strong>Email:</strong> MARINAseafood@gmail.com</p>
          <p class="title mt-2"><strong>Tiktok:</strong> Mariana Seafood</p>
          <h4 class="title mt-3">Working Time</h4>
          <p class="title mt-2"><strong>Every day:</strong> 9:00 AM - 9:00 PM</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row mt-4">
        <label class="bking_ifor"><strong>Information of your booking:</strong></label>
      </div>
      <div class="row ms-4 mt-4 d-flex gap-5">
        <div class="col-5 table_box shadow mb-3">
          <h4 class="card-title mt-3 text-center">Table information</h4>
          <hr>
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="<?= $table['image']; ?>" class="card-img" alt="Product Image">
              </div>
              <div class="col-8">
                <p class="card-text">Name:
                  <?= $table['name']; ?>
                </p>
                <p class="card-text">Table for
                  <?php echo $table['number_of_seat']; ?>
                </p>
                <p class="card-text">Price:
                  <?= $table['price']; ?> VND
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 shadow mb-3">
          <h4 class="card-title mt-3 text-center">Dishes information</h4>
          <hr>
          <div class="card-body" style="max-height: 170px; overflow-y: scroll;">
            <?php foreach ($decodedValues as $product) {
              $result = get_dish_by_id($product[0]);
              ?>
              <div class="row">
                <div class="col-4">
                  <img src="<?= $result['image']; ?>" class="card-img" alt="Product Image">
                </div>
                <div class="col-8">
                  <p class="card-text">Name:
                    <?= $result['name']; ?>
                  </p>
                  <p class="card-text">Price:
                    <?= $result['price']; ?> VND
                  </p>
                  <p class="card-text">Quantity:
                    <?= $product[1]; ?>
                  </p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6 d-flex total_bkig">
        <h4 class="col-6" style="color:#26577C;">Total amount:</h4>
        <input type="text" id="total_dispoint" value="" class="col-5 text-danger"></input>
      </div>
      <script>
        var total_dispoint = localStorage.getItem("total_dispoint");
        document.getElementById('total_dispoint').value = total_dispoint;
      </script>
      <div class="col-6 butn">
        <a href="<?php echo ('../../controllers/bookings/init_payment.php')?>"><button class="btn bg-danger booking_now">Booking now </button></a>
      </div>
    </div>
  </div>
  <script>

    // Lấy giá trị của key "checkboxQuantityValues" từ local storage
    const checkboxQuantityValues = localStorage.getItem('checkboxQuantityValues');

    // Kiểm tra nếu có giá trị của key "checkboxQuantityValues" thì chuyển đổi thành mảng số
    let quantityValues = [];
    if (checkboxQuantityValues) {
      quantityValues = JSON.parse(checkboxQuantityValues);

      // Chuyển đổi các giá trị thành số
      quantityValues = quantityValues.map(item => [Number(item[0]), Number(item[1]), Number(item[2])]);
    }

    // Gửi giá trị đã chuyển đổi lên URL
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('checkboxQuantityValues', JSON.stringify(quantityValues));

    // Thay đổi URL với giá trị mới của key "checkboxQuantityValues"
    const newUrl = window.location.pathname + '?' + urlParams.toString();
    window.history.replaceState({}, '', newUrl);
  </script>
</body>
<?php include('../../views/partials/footer.php'); ?>