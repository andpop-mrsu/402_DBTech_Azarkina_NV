#!/usr/bin/env php

<?php

$pathForGithub = __DIR__.'/../vendor/autoload.php';
$pathForPackagist = __DIR__.'/../../../autoload.php';

if (file_exists($pathForGithub)) {
    require_once($pathForGithub);
} else {
    require_once($pathForPackagist);
}

// require_once __DIR__ . '/../vendor/autoload.php';

use PUMUSHKA\TicTacToe\Controller\Controller;

$controller = new Controller();
$controller->startGame();
