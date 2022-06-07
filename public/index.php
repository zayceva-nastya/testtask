<?php

declare(strict_types=1);

session_start();

require_once '../src/autoload.php';

use  Core\Application ;

$application = new Application();
// print_r($_SERVER);
error_reporting(E_ALL);
ini_set('display_errors', '1');
$application
    ->setRouter(require '../config/routes.php');

echo $application->handle($_SERVER['REQUEST_URI']);


