<?php


require dirname(dirname(__FILE__)) .'models/User/post.model.php';

$posts = getUsers();

require dirname(dirname(__FILE__)) ."views/post/user/post.view.php";