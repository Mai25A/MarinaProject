<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
require_once('../partials/head.php');
require_once('../../views/css/login.css.php');
?>
</head>

<body>
  <form>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Email Address*</label>
          <input type="password" class="form-control" id="exampleInputEmail" placeholder="Email Address">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password*</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn custom-button">Sign in</button>
          <div>
            <div class="Forgot">
              <a href="" class="fcolor">Forgot Password?</a>
            </div>
            <div class="Register">
              <a href="" class="rcolor">Don’t have a account? <span class="register">Register</span></a>
            </div>
          </div>
        </div>
  </form>