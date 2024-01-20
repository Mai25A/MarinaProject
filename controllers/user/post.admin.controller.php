<?php
include_once("../../models/post.user.model.php");
$users = selectAllUser();
require_once "../../views/user/post.view.php" ;
?>