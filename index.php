<?php

ini_set('display_errors', 'On');
// Suppress deprecation warnings from legacy TCPDF library
// Change to E_ALL to see all warnings during development
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include_once 'vendor/autoload.php';

use Simcify\Application;

$app = new Application();
$app->route();
