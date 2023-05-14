<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::get('/', 'HomeController@show');

Group::middleware('guest')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('auth')->members(function ()
{
 
    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');
});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
