<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Ошибки и протоколирование
error_reporting(E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);



date_default_timezone_set('Europe/Kiev');



require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config/app.php');

require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Core/Router.php');