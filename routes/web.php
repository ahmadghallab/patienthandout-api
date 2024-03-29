<?php

$router->group(['prefix' => 'api/v1'], function() use ($router) {
    $router->post('user', [
        'uses' => 'AuthController@store'
    ]);

    $router->post('user/signin', [
        'uses' => 'AuthController@signin'
    ]);
});
