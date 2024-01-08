<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php require_once('../../views/css/login.css.php');?>
<?php require_once "../partials/nav.php"; ?>

</head>

<body>
  
  <form action="../../controllers/login/login.controller.php" method="POST">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label" name="email">Email Address*</label>
          <input type="text" class="form-control" id="exampleInputEmail" placeholder="Email Address" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label" name="password">Password*</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input ms-3" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label ms-3" for="invalidCheck2">
                  Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn custom-button" name="submit">Sign in</button>
          <div>
            <div class="Forgot">
              <a href="" class="fcolor">Forgot Password?</a>
            </div>
            <div class="Register">
              <a href="../account/Register.view.php" class="rcolor">Don’t have a account? <span class="register">Register</span></a>
            </div>
          </div>
        </div>
  </form>