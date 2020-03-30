<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/', function () {
    return view('index1');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/helloworld', function () {
    return view('helloworld');
});

Route::get('/test', 'TestController@test');
Route::get('/testView', 'TestController@testView');

Route::get('/askme', function () {
    return view('whoami');
});

Route::post('/whoami', 'WhatsMyNameController@index');

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/login', function () {
        return view('login');
    });

Route::post('dologin', 'LoginController@index');

Route::post('doLoginBlade', 'Login2Controller@loginUser');

Route::get('/login3', function () {
    return view('login3');
});
    
Route::post('doLogin3', 'Login3Controller@index');


//Route to REST Controller
//Route::resource('/usersrest', 'UserRestController@index');
Route::get('/usersrest', 'UserRestController@index');
Route::get('/usersrest/{id}', 'UserRestController@show');
    


Route::get('/loggingservice', 'TestLoggingController@index');
