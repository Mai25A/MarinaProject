<?php
include("../../models/bookings.model.php");
include('../../models/tables.model.php');
include('../../models/menu.model.php');

if(isset($_GET['table_id'])){
    $table = get_one_table($_GET['table_id']);
    if(isset($_GET['dishes_id'])){
        $dish = get_dish_by_id($_GET['dishes_id']);
    }
}
include("../../views/bookings/booking.view.php");