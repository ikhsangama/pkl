<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/containerindex', function () {
    return view('containerindex');
});
Route::get('/containerlisting', function () {
    return view('containerlisting');
});
Route::get('/containerdetail', function () {
    return view('containerdetail');
});

Route::get('/createagent', function () {
    return view('agents_create');
});
Route::get('/registeragent', function () {
    return view('agents_register');
});
Route::get('/createcustomer', function () {
    return view('customer_create');
});
Route::get('/registercustomer', function () {
    return view('customer_register');
});

Route::get('/containerindexproto', function () {
    return view('containerindexproto');
});
Route::get('/containerlistingproto', function () {
    return view('containerlistingproto');
});
// Route::get('/signincustomer', function () {
//     return view('customer_signin');
// });


Route::get('/containerlistingproto/', 'IndexController@show');
Route::get('/containerdetailproto/{id}', 'IndexController@detail');


Route::get('/containerindexproto', 'IndexController@home');
Route::get('/containerindexproto/product', 'IndexController@product');
Route::post('/containerindexproto/show', 'IndexController@show');

Route::auth();
Route::get('/signincustomer', 'Auth\AuthController@getLogin');
Route::post('/signincustomerproses', 'Auth\AuthController@postLogin');
Route::get('/logoutcustomer', 'Auth\AuthController@getLogout');

Route::get('/home', 'HomeController@index');
