<?php
include 'models/login/register.model.php';

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $user = get_one_user($id);
}

include 'views/account/profile.detail.view.php';

