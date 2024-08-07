<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api/v1/connect'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
    $router->get('/{id}', ['uses' => 'UserController@get_user']);
});

$router->group(['prefix' => 'api/v1/product', 'middleware' => 'auth'], function() use ($router){
    $router->get('/', ['uses' => 'ProductController@index']);
    $router->post('/', ['uses' => 'ProductController@store']);
});