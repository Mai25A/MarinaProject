<?php
require_once 'views/css/acount/profile.detail.css.php';
require 'models/login/login.model.php';
require_once "views/partials/link.php";

?>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card mt-4 mb-4">
            <div class="row bg-behind">
                <div class="image-user text-center mt-4">
                    <img src="<?= $user['image'] ?>" alt="avatar">
                    <i class="bi bi-pencil-square"></i>
                    <h1>
                        <?= isset($user['name']) ? $user['name'] : '' ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="info">
                        <div class="list-group col-10">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                <i class="bi bi-house-fill"></i><span class="ms-2">Account Details</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="bi bi-journal-text"></i><span class="ms-2">Booked tables</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="bi bi-heart"></i><span class="ms-2">Favourite tables</span>
                            </a>
                            <a href="/logout"
                                class="list-group-item list-group-item-action">
                                <i class="bi bi-box-arrow-left"></i><span class="ms-2">Logout</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 info_box mb-4 mt-3">
                    <!-- <div class="info-user"> -->
                    <div class="row col-11 info-user">
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email"
                                value="<?= isset($user['email']) ? $user['email'] : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputname" class="form-label">Full name</label>
                            <input type="text" class="form-control light-gray" id="inputname" name="name"
                                value="<?= isset($user['name']) ? $user['name'] : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputnumber" class="form-label">Phone number</label>
                            <input type="text" class="form-control light-gray" id="inputnumber" name="phone"
                                value="<?= isset($user['phone']) ? $user['phone'] : '' ?>">
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        const listGroupItems = document.querySelectorAll('.list-group-item');
        listGroupItems.forEach(item => {
            item.addEventListener('click', function () {
                listGroupItems.forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>