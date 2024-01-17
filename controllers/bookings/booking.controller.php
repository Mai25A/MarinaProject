<?php
include("../../models/bookings.model.php");
include('../../models/tables.model.php');
include('../../models/menu.model.php');
include('../../models/post.user.model.php');

if (isset($_COOKIE['User'])) {
    $name = $_COOKIE['User'];
    $user = get_usser_by_name($name);
    if (isset($_GET['table_id'])) {
        $table = get_one_table($_GET['table_id']);
        if (isset($_GET['dishes_id'])) {
            $dish = get_dish_by_id($_GET['dishes_id']);
        }
    }
}
elseif (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $user = getUserById($id);
    if (isset($_GET['table_id'])) {
        $table = get_one_table($_GET['table_id']);
        if (isset($_GET['dishes_id'])) {
            $dish = get_dish_by_id($_GET['dishes_id']);
        }
    }
}
$checkboxQuantityValues = $_GET['checkboxQuantityValues'];
$decodedValues = json_decode($checkboxQuantityValues, true);
print_r($decodedValues);
// if(count($decodedValues)>0){
//     $check = true;
// }else{
//     $check= false;
// }



include("../../views/bookings/booking.view.php");