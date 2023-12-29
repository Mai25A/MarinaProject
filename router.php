<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/start-code/' => 'controllers/home/index.controller.php',
    '/start-code/user/post' => 'controllers/post/user/post.controller.php',
    '/start-code/post/user/create' => 'controller/post/user/post.create.controller.php',
    '/start-code/post/user/edit' => 'controller/post/user/post.edit.controller.php',
    '/start-code/post/user/detele' => 'controller/post/usre/post.detele.controller.php'
];



