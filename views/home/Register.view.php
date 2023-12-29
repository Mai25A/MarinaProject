<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
    require_once('../css/register.css.php');
?>
</head>

<body>
  <form>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-3">
          <label for="lname" class="form-label">Name* </label>
          <input type="text" class="form-control" id="lname" placeholder="full name">
        </div>
        <div class="mb-3">
          <label for="lphone" class="form-label">Phone number*</label>
          <input type="email" class="form-control" id="lphone" placeholder="Phone Number">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Email Address*</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Email Address">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password*</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Email Address">
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary custom-button">Singup</button>
        <div>
        <div class="haveAcount">
          <a href="">Already have an account?</a>
        </div>
      </div>
    </div>
  </form>