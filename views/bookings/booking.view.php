<?php
include("../../views/partials/head.php");
include("../../views/css/bookings/booking.css.php"); ?>

<body>
  <div class="container mt-4">
    <div class="row message">
      <h1>For bookings of 16 or more guests please give us a call directly on <b>+84(0) 33982406</b></h1>
    </div>
    <div class="row mt-4">
      <div class="col-6 d-flex">
        <h4 class="col-6" style="color:#26577C;">Total amount:</h4>
        <input type="text" id="total_dispoint" value="" class="col-5 text-danger"></input>
      </div>
      <script>
        var total_dispoint = localStorage.getItem("total_dispoint");
        document.getElementById('total_dispoint').value = total_dispoint;
      </script>
      <div class="col-6 butn">
        <button class="btn bg-danger booking_now">Booking now </button>
      </div>
    </div>
    <div class="row">
      <div class="col-7 mt-5 ifor_check">
        <div class="row infor">
          <div class="row mb-3">
            <div class="col-6">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control grayed-out" id="fullName" placeholder="Enter your full name"
                readonly>
            </div>
            <div class="col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control grayed-out" id="email" placeholder="Enter your email" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control grayed-out" id="phoneNumber" placeholder="Enter your phone number"
                readonly>
            </div>
            <div class="col-6">
              <label for="date">Select Date</label>
              <input type="date" class="form-control date" id="date" placeholder="Enter a datetime">
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="row">
            <label class="bking_ifor" style="padding-left: 10px;"><strong>Select Time</strong></label>
          </div>
          <div class="row d-flex mb-3 justify-content-center">
            <div class="col-8 d-flex flex-column justify-content-end mt-2  time_pick">
              <div class="row d-flex gap-4 line1">
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
              <div class="row d-flex gap-4 line2 mt-2">
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
              <div class="row d-flex gap-4 line3 mt-2">
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
        <div class="col-5 shadow mb-3">
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

        <div class="col-6  shadow mb-3">
          <h4 class="card-title mt-3 text-center">Dishes information</h4>
          <hr>
          <div class="card-body">
            <?php if (isset($dish)) { ?>
              <div class="row">
                <div class="col-4">
                  <img src="<?= $dish['image']; ?>" class="card-img" alt="Product Image">
                </div>
                <div class="col-8">
                  <p class="card-text">Name:
                    <?= $dish['name']; ?>
                  </p>
                  <p class="card-text">Price:
                    <?= $dish['price']; ?> VND
                  </p>
                  <p class="card-text">Quantity:
                    <?= $dish['quantity']; ?>
                  </p>
                </div>
              </div>
            <?php }else{
              ?>
              <p class="fs-4 text-center" ><strong>No items selected</strong></p>
              <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>

  </script>
</body>
<?php include('../../views/partials/footer.php'); ?>