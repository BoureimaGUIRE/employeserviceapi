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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'employeservice'], function () use ($router) {
        $router->get('/', ['uses' => 'EmployeController@index']);
        $router->get('/contrat', ['uses' => 'ContratController@index']);
        $router->get('/contrat/{id}', ['uses' => 'ContratController@show']);
        $router->post('/', ['uses' => 'EmployeController@store']);
        $router->get('/{id}', ['uses' => 'EmployeController@show']);
        $router->patch('/{id}', ['uses' => 'EmployeController@update']);
        $router->delete('/{id}', ['uses' => 'EmployeController@destroy']);
    });
});
