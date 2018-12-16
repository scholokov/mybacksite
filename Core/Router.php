<?php

// function getURI(){
//     if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
//         return trim($_SERVER['REQUEST_URI'], '/');
// }


// switch (getURI()) {

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        # code...
        require_once VIEWS.'pages/index.php';
        break;
    case '/about':
        # code...
        require_once VIEWS.'pages/about.php';
        break;
    case '/contacts':
        # code...
        require_once VIEWS.'pages/contacts.php';
        break;
    case '/blog':
        # code...
        require_once CONTROLLERS.'BlogController.php';
        break;
    default:
        # code...
        require_once VIEWS.'pages/errors/404.php';
        break;
}
