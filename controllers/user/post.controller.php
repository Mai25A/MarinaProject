<?php
include_once("../../models/post.user.model.php");
$users = selectAllUser();
require "../../views/user/post.view.php";