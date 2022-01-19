<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('authors', [AuthorController::class, 'index']);
$router->post('authors', [AuthorController::class, 'store']);
$router->put('authors/{author}', [AuthorController::class, 'update']);
$router->get('authors/{author}', [AuthorController::class, 'show']);
$router->patch('authors/{author}', [AuthorController::class, 'update']);
$router->delete('authors/{author}', [AuthorController::class, 'delete']);
