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
$router->get('/users',['uses' => 'UserController@getUsers']);

});

$router->get('/userss', 'UserController@index');// index

$router->get('/users',['uses' => 'UserController@getallstud']); //get all users

$router->get('/guser/{id}', 'UserController@getstudid'); // get user by id

$router->post('/auser', 'UserController@addstud'); // create new user record

$router->put('/uuser/{id}', 'UserController@updatestudid'); // update user record

$router->delete('/duser/{id}', 'UserController@deletestudid'); // delete record
