<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/web/home.controller.php',
    '/admin' => 'controllers/web/sidebav.controller.php',
    '/about' => 'controllers/web/about.controller.php',
    '/contact' => 'controllers/web/contact.controller.php',

    '/table' => 'controllers/tables/table.admin.controller.php',
    '/tables/create' => 'controllers/tables/table.create.controller.php',
    '/tables/delete' => 'controllers/tables/table.delete.controller.php',
    '/tables/update' => 'controllers/tables/table.update.controller.php',
    '/tables/detail' => 'controllers/menu/menu.detail.controller.php',

    '/menu' => 'controllers/menu/menu.admin.controller.php',
    '/menu/create' => 'controllers/menu/create.admin.controller.php',
    '/menu/delete' => 'controllers/menu/menu.delete.controller.php',
    '/menu/update' => 'controllers/menu/menu.update.controller.php',
    '/menu/detail' => 'controllers/menu/menu.detail.controller.php',

    '/user' => 'controllers/user/post.admin.controller.php',
    '/user/reate' => 'controllers/user/post.create.controller.php',
    '/user/delete' => 'controllers/user/post.delete.controller.php',
    '/user/update' => 'controllers/user/post.update.controller.php',


    '/register' => 'controllers/account/register.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/logout' => 'controllers/login/logout.controller.php',
    '/profile' => 'controllers/account/profile.detail.controller.php',

    '/bookings' => 'controllers/bookings/bookings.admin.controller.php',
    '/bookingsdetail' => 'controllers/bookings/bookings.admin.detail.controller.php'

];
if (array_key_exists($uri, $routes)) {
   require $routes[$uri];
} 
// else {
//     http_response_code(404);
//     // require 'views/errors/404.php';
//     die();
// }


