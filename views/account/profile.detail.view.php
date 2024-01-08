<?php 
require_once '../css/acount/profile.detail.css.php';
require_once '../../controllers/account/profile.detail.controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"); -->
</head>
<body>
    <div class="container container-flex">
        <div class="info">
            <div class="image-user">
                <img src="<?= $value['image'] ?>" alt="">
            </div>
            <div class="categories">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"> <i class="bi bi-house-fill"></i><span class="ms-2">Account Details</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-journal-text"></i><span class="ms-2">Booked tables</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-heart"></i><span class="ms-2">Favourite tables</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-box-arrow-left"></i><span class="ms-2">Logout</a>
                </div>
            </div>
        </div>
        <div class="info-user">
            <h1>KSOR RINA</h1>
            <form>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="<?= isset($user['email']) ? $user['email'] : '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputname" class="form-label">Full name</label>
                    <input type="email" class="form-control" id="inputname" name="name" value="<?= isset($user['name']) ? $user['name'] : '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputnumber" class="form-label">Phone number</label>
                    <input type="email" class="form-control" id="inputnumber" name="phone" value="<?= isset($user['phone']) ? $user['phone'] : '' ?>">
                </div>
        </div>
    </div>
    </div>
</body>
<script>
    const listGroupItems = document.querySelectorAll('.list-group-item');
    listGroupItems.forEach(item => {
        item.addEventListener('click', function() {
            listGroupItems.forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>