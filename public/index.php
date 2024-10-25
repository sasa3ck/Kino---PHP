<?php

define('APP_PATH', dirname(path: __DIR__));

require_once APP_PATH . '/vendor/autoload.php';

use App\Kernel\App;

$app = new App();
$app->run();
