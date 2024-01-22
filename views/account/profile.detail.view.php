<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php
require_once 'views/css/acount/profile.detail.css.php';
require_once "views/partials/link.php";
?>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card mt-4 mb-4">
            <div class="row bg-behind">
                <div class="image-user text-center mt-4">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.puMo9ITfruXP8iQx9cYcqwHaGJ&pid=Api&P=0&h=180"
                        alt="avatar">
                    <h1>
                        <?= isset($user['name']) ? $user['name'] : '' ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="info">
                        <div class="list-group col-10">
                            <a href="/profile" class="list-group-item list-group-item-action active"
                                aria-current="true">
                                <i class="bi bi-house-fill"></i><span class="ms-2">Account Details</span>
                            </a>
                            <!-- sửa lại đường dẫn -->
                            <a href="/bookedtable"
                                class="list-group-item list-group-item-action">
                                <i class="bi bi-journal-text"></i><span class="ms-2">Booking history</span>
                            </a>

                            <a href="/logout" class="list-group-item list-group-item-action">
                                <i class="bi bi-box-arrow-left"></i><span class="ms-2">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 info_box mb-4 mt-3">
                    <form action="/profile/update" method="post">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <div class="row col-11 info-user">
                            <div class="col-md-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    value="<?= isset($user['email']) ? $user['email'] : '' ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="inputname" class="form-label">Full name</label>
                                <input type="text" class="form-control bg-light" id="inputname" name="name"
                                    value="<?= isset($user['name']) ? $user['name'] : '' ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="inputnumber" class="form-label">Phone number</label>
                                <input type="text" class="form-control bg-light" id="inputnumber" name="phone"
                                    value="<?= isset($user['phone']) ? $user['phone'] : '' ?>">
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mt-4 w-25">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
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