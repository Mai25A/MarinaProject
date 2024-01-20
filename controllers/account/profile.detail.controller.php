<?php
include 'models/login/register.model.php';

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $user = get_one_user($id);
}

include 'views/account/profile.detail.view.php';

