<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
session_start();

require_once('views/css/acount/register.css.php');
?>
</head>

<body>
  <form action="/register" method="POST" onsubmit="return validateFormRegister()">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="mb-2">
          <label for="lname" class="form-label">Name* </label>
          <input type="text" class="form-control" id="lname" placeholder="Full name" name="name">
          <small class="form-text text-danger" id="nameError"></small>
        </div>
        <div class="mb-2">
          <label for="lphone" class="form-label">Phone number*</label>
          <input type="tel" class="form-control" id="lphone" placeholder="Phone Number" name="phone">
          <small class="form-text text-danger" id="phoneNumberError"></small>
        </div>
        <div class="mb-2">
          <label for="inputEmail" class="form-label">Email Address*</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email">
          <small class="form-text text-danger" id="emailError"></small>
        </div>
        <div class="mb-2">
          <label for="inputPassword" class="form-label">Password*</label>
          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
          <small class="form-text text-danger" id="passwordError"></small>
        </div>
        <div class="mb-2">
        <button type="submit" class="btn custom-button">Sing up</button>
        <div>
        <div class="haveAcount">
          <a href="" class="color">Already have an account?</a>
        </div>
  </form>

  <script>
    function validateName(nameError) {
      var nameInput = document.getElementById('lname');
      var nameError = document.getElementById(nameError);

      if (!nameInput.value.trim()) {
        nameError.textContent = 'Please enter a name';
        nameInput.classList.add('is-invalid');
        return false;
      } else {
        nameError.textContent = '';
        nameInput.classList.remove('is-invalid');
        return true;
      }
    }

    function validatePhoneNumber(phoneNumberError) {
      var phoneInput = document.getElementById('lphone');
      var phoneError = document.getElementById(phoneNumberError);

      var phoneNumberPattern = /^\d{10}$/;

      if (!phoneNumberPattern.test(phoneInput.value)) {
        phoneError.textContent = 'Please enter a valid phone number';
        phoneInput.classList.add('is-invalid');
        return false;
      } else {
        phoneError.textContent = '';
        phoneInput.classList.remove('is-invalid');
        phoneInput.classList.add('is-valid');
        return true;
      }
    }

    function validateEmail(emailError) {
      var emailInput = document.getElementById('inputEmail');
      var emailError = document.getElementById(emailError);

      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Mẫu email đơn giản

      if (emailInput.value.trim() === '') {
        emailError.textContent = 'Please enter an email address';
        emailInput.classList.add('is-invalid');
        return false;
      } else if (!emailPattern.test(emailInput.value)) {
        emailError.textContent = 'Please enter a valid email address';
        emailInput.classList.add('is-invalid');
        return false;
      } else {
        emailError.textContent = '';
        emailInput.classList.remove('is-invalid');
        emailInput.classList.add('is-valid');
        return true;
      }
    }

    function validatePassword(passwordError) {
      var passwordInput = document.getElementById('inputPassword');
      var passwordError = document.getElementById(passwordError);

      var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Mẫu mật khẩu yêu cầu ít nhất 8 ký tự, bao gồm ít nhất một chữ cái và một chữ số

      if (passwordInput.value.trim() === '') {
        passwordError.textContent = 'Please enter a password';
        passwordInput.classList.add('is-invalid');
        return false;
      } else if (!passwordPattern.test(passwordInput.value)) {
        passwordError.textContent = 'Password must be at least 8 characters long and include at least one letter and one number';
        passwordInput.classList.add('is-invalid');
        return false;
      } else {
        passwordError.textContent = '';
        passwordInput.classList.remove('is-invalid');
        passwordInput.classList.add('is-valid');
        return true;
      }
    }

    function validateFormRegister() {
      var isNameValid = validateName('nameError');
      var isPhoneValid = validatePhoneNumber('phoneNumberError');
      var isEmailValid = validateEmail('emailError');
      var isPasswordValid = validatePassword('passwordError');
      return isNameValid && isPhoneValid && isEmailValid && isPasswordValid;
    }
  </script>