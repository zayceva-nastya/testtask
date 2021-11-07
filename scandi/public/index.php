<?php

declare(strict_types=1);
session_start();


define('CONFIG_DIR', dirname(__DIR__) . '/config');

require_once '../src/autoload.php';
echo "<pre>";
// print_r($_SERVER);
use  Core\Application ;

$application = new Application();

$application
    ->setRouter(require CONFIG_DIR . '/routes.php');

echo $application->handle($_SERVER['REQUEST_URI']);


