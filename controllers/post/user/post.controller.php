<?php


require dirname(dirname(__DIR__)) .'models/User/post.model.php';

$posts = getUsers();

require dirname(dirname(__DIR__)) ."views/post/user/post.view.php";