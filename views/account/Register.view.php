<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
session_start();

require_once('../css/acount/register.css.php');
?>
</head>

<body>
  <form action="../../controllers/account/register.controller.php" method="POST">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-2">
          <label for="lname" class="form-label">Name* </label>
          <input type="text" class="form-control" id="lname" placeholder="full name" name="name">
        </div>
        <div class="mb-2">
          <label for="lphone" class="form-label">Phone number*</label>
          <input type="phonenumber" class="form-control" id="lphone" placeholder="Phone Number" name="phone">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail" class="form-label">Email Address*</label>
          <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address" name="email">
        </div>
        <div class="mb-2">
          <label for="exampleInputPassword" class="form-label">Password*</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
        </div>
        <div class="mb-2">
        <button type="submit" class="btn custom-button">Singup</button>
        <div>
        <div class="haveAcount">
          <a href="" class="color">Already have an account?</a>
        </div>
      </div>
    </div>
  </form>
</body>
</html>