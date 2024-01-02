<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/start-code/' => 'controllers/home/index.controller.php',
    '/post/user/create' => 'controller/post/user/post.create.controller.php',
    '/post/user/edit' => 'controller/post/user/post.edit.controller.php',
    '/post/user/detele' => 'controller/post/usre/post.detele.controller.php',
    '/post' => 'controllers/post/post.controller.php',
    '/project' => 'controllers/project/project.controller.php',
    '/delete' => 'controllers/post/post.deleteMenu.controller.php',
    '/create' => 'controllers/menu/create.menuManagement.controllers.php',
    '/admin_table' => 'controllers/tables/table.admin.cotroller.php',
    '/' => 'controllers/home/index.controller.php',
];



