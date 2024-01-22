<?php
require_once("views/partials/link.php");
// require_once "views/partials/head.php";
require_once('views/css/login.css.php'); 
?>
</head>

<body>
  <form action="/login" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Email Address*</label>
          <input type="text" class="form-control" name="email" id="exampleInputEmail" placeholder="Email Address"
            required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password*</label>
          <div class="input-group">
            <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password"
              required>
            <span class="input-group-text">
              <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i>
            </span>
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input ms-3" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label ms-5" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn custom-button" name="login_admin" value="Login">Sign in</button>
          <div>
            <div class="Forgot">
              <a href="" class="fcolor">Forgot Password?</a>
            </div>
            <div class="Register">
              <a href="/register" class="rcolor">Don’t have a account? <span
                  class="register">Register</span></a>
            </div>
          </div>
        </div>
  </form>

  <script>
    // JavaScript to toggle password visibility
    const passwordInput = document.getElementById('exampleInputPassword');
    const togglePasswordButton = document.getElementById('togglePassword');

    togglePasswordButton.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      togglePasswordButton.classList.toggle('fa-eye-slash');
    });
  </script>
 