<?php
require __DIR__."/controller/IndexController.php";
require __DIR__."/controller/UserController.php";
require __DIR__."/controller/AdvertisementController.php";
//current route
$route = $_SERVER["REQUEST_URI"];

switch ($route) {
    case '/users':
        $userController = new UserController();
        $userController->index();
        break;

    case '/advertisements':
        $advertisementController = new AdvertisementController();
        $advertisementController->index();
        break;
    
    default:
        $indexController = new IndexController();
        $indexController->index();
        break;
}
?>