<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', 'App\Http\Controllers\DashboardController@index');
Route::get('/login', 'App\Http\Controllers\DashboardController@login');
Route::post('/create-user', 'App\Http\Controllers\DashboardController@createUser');

# usuarios
Route::get('users', 'App\Http\Controllers\UsersController@index') ;
Route::get('users/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\UsersController@index') ;
Route::get('users/{id}', 'App\Http\Controllers\UsersController@show') ;
Route::post('users', 'App\Http\Controllers\UsersController@store') ;
Route::delete('users/{id}', 'App\Http\Controllers\UsersController@destroy') ;
Route::post('users/{id}', 'App\Http\Controllers\UsersController@update') ;

# perfil
Route::get('profiles', 'App\Http\Controllers\ProfilesController@index') ;

#abre o form para preencher os dados
Route::get('profile', 'App\Http\Controllers\ProfilesController@new') ;
Route::get('module', 'App\Http\Controllers\ModulesController@new') ;
Route::get('user', 'App\Http\Controllers\UsersController@new') ;

# salva depois de preenchido
Route::post('profiles', 'App\Http\Controllers\ProfilesController@store') ;
Route::post('modules', 'App\Http\Controllers\ModulesController@store') ;
Route::post('users', 'App\Http\Controllers\UsersController@store') ;


Route::get('profiles/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\ProfilesController@index') ;
Route::get('profiles/{id}', 'App\Http\Controllers\ProfilesController@show') ;

Route::delete('profiles/{id}', 'App\Http\Controllers\ProfilesController@destroy') ;
Route::post('profiles/{id}', 'App\Http\Controllers\ProfilesController@update') ;

# modulos
Route::get('modules', 'App\Http\Controllers\ModulesController@index') ;
Route::get('users/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\ModulesController@index') ;
Route::get('users/{id}', 'App\Http\Controllers\ModulesController@show') ;
// Route::post('users', 'App\Http\Controllers\ModulesController@store') ;
Route::delete('users/{id}', 'App\Http\Controllers\ModulesController@destroy') ;
Route::post('users/{id}', 'App\Http\Controllers\ModulesController@update') ;


Route::get('/validate-user', 'App\Http\Controllers\DashboardController@validateUser');

$router->group( ['prefix' => 'study-case'] , function() use ($router) {

    Route::post('/login', 'App\Http\Controllers\StudentsController@logar');

    Route::get('/phrases', 'App\Http\Controllers\PhrasesController@getPhrases');

    Route::get('/attendances', 'App\Http\Controllers\AttendancesController@getByStudent');

    Route::post('/attendances-messages', 'App\Http\Controllers\AttendancesMessagesController@save');
    
} ) ;