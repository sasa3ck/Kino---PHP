<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\Router\Route;

return [
  Route::get(uri: '/', action: [HomeController::class, 'index']),
  Route::get(uri: '/home', action: [HomeController::class, 'index']),
  Route::get(uri: '/movies', action: [MovieController::class, 'index']),
  // Route::get(uri: '/test', action: function () { echo 'Test page'; }),
];
