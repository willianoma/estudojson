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

//Route::get('pessoa', ['middleware' => ['auth', 'needsPermission'], 'shield' => 'exemplo.create', function () {
//    return 'Yes I can!';
//}]);

//Route::get('pessoa', ['middleware' => ['auth', 'needsPermission'], 'shield' => 'exemplo.create', function () {
//    return 'Yes I can!';
//}]);


Route::resource('pessoa', 'PessoaController');
Route::get('/pessoasjson', 'PessoaController@pessoasjson');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Registrarion routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

//Password reset link request routes
Route::get('recuperar-senha', 'Auth\PasswordController@getEmail');
Route::post('recuperar-senha', 'Auth\PasswordController@postEmail');

//password reset routes
Route::get('resetar-senha{token}', 'Auth\PasswordController@getReset');
Route::post('resetar-senha/', 'Auth\PasswordController@postReset');

Route::group(['prefix' => 'painel', 'middleware' => 'auth', 'needsPermission', 'shield' => 'exemplo.create'], function () {
    Route::controller('/', 'Painel\PainelController');
});


//Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {
//    Route::controller('/', 'Painel\PainelController');
//});


Route::controller('/', 'Site\HomeController');
