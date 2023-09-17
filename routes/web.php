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


Route::get('change-depto/{depto}', 'App\Http\Controllers\DashboardController@changeDepto');

// novo painel
    Route::get('dashboard-novo', 'App\Http\Controllers\DashboardController@dashboardNovo');
    Route::get('dashboard-base', 'App\Http\Controllers\DashboardController@dashboardBase');
    
    Route::get('listagem-novo', 'App\Http\Controllers\ProductsController@listagemNovo');
    Route::get('new-novo', 'App\Http\Controllers\ProductsController@newNovo');
// fim novo painel

Route::get('import-data', 'App\Http\Controllers\DashboardController@importData');
Route::post('upload-import', 'App\Http\Controllers\DashboardController@uploadImport');

# APLICATIVO
Route::get('aplicativo', 'App\Http\Controllers\AppController@index');
Route::get('aplicativo/login', 'App\Http\Controllers\AppController@login');
Route::get('consulta_equipamentos', 'App\Http\Controllers\AppController@consultaEquip');
Route::get('ocorrencias', 'App\Http\Controllers\AppController@ocorrencias');
Route::get('solic_permissoes', 'App\Http\Controllers\AppController@solicPermissoes');
Route::get('mov_lote', 'App\Http\Controllers\AppController@index');
Route::get('discart_lote', 'App\Http\Controllers\AppController@discartLot');
Route::get('finish_lote', 'App\Http\Controllers\AppController@finishLote');

Route::post('get-produto-app', 'App\Http\Controllers\AppController@getProdutoApp');
Route::post('save-exit-app', 'App\Http\Controllers\AppController@saveExitApp');
Route::post('add-lote-app', 'App\Http\Controllers\AppController@addLote');
Route::post('busca-prod-app', 'App\Http\Controllers\AppController@index');
Route::post('save-occurrence-app', 'App\Http\Controllers\AppController@saveOccurrence');

Route::get('/', 'App\Http\Controllers\DashboardController@login');

Route::get('/logout-sys', 'App\Http\Controllers\DashboardController@logout');
Route::get('/logout', 'App\Http\Controllers\AppController@logout');

Route::get('/login-valid', 'App\Http\Controllers\DashboardController@changeDeptoMenu');

Route::get('/painel/{origin}', 'App\Http\Controllers\DashboardController@dashboard');
Route::get('/painel', 'App\Http\Controllers\DashboardController@dashboard');
Route::get('/index', 'App\Http\Controllers\DashboardController@index');
Route::get('/login', 'App\Http\Controllers\DashboardController@login');
Route::get('/sign-up-user', 'App\Http\Controllers\DashboardController@signUp');
Route::post('/create-user', 'App\Http\Controllers\DashboardController@createUser');

# usuarios
Route::get('users/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\UsersController@index') ;
Route::get('users/{id}', 'App\Http\Controllers\UsersController@show') ;
Route::post('users', 'App\Http\Controllers\UsersController@store') ;
Route::delete('users/{id}', 'App\Http\Controllers\UsersController@destroy') ;
Route::post('users/{id}', 'App\Http\Controllers\UsersController@update') ;
Route::post('register', 'App\Http\Controllers\UsersController@store') ;

#==============================================================================================

# colaborador

$router->get('colaborador', 'App\Http\Controllers\ColaboradorController@index') ;
$router->get('colaborador/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\ColaboradorController@index') ;
$router->get('colaborador/{id}', 'App\Http\Controllers\ColaboradorController@show') ;
$router->post('colaborador', 'App\Http\Controllers\ColaboradorController@store') ;
$router->post('colaborador/save', 'App\Http\Controllers\ColaboradorController@save') ;
$router->delete('colaborador/{id}', 'App\Http\Controllers\ColaboradorController@destroy') ;
$router->post('colaborador/{id}', 'App\Http\Controllers\ColaboradorController@update') ;

#ocorrencias
$router->get('occurrences', 'App\Http\Controllers\OccurrencesController@index') ;
$router->get('occurrences/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\OccurrencesController@index') ;
$router->get('occurrences/{id}', 'App\Http\Controllers\OccurrencesController@show') ;
$router->post('occurrences', 'App\Http\Controllers\OccurrencesController@store') ;
$router->post('occurrences/save', 'App\Http\Controllers\OccurrencesController@save') ;
$router->delete('occurrences/{id}', 'App\Http\Controllers\OccurrencesController@destroy') ;
$router->post('occurrences/{id}', 'App\Http\Controllers\OccurrencesController@update') ;

#permissoes
$router->get('permitions', 'App\Http\Controllers\PermitionsController@index') ;
$router->get('permitions/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\PermitionsController@index') ;
$router->get('permitions/{id}', 'App\Http\Controllers\PermitionsController@show') ;
$router->post('permitions', 'App\Http\Controllers\PermitionsController@store') ;
$router->post('permitions/save', 'App\Http\Controllers\PermitionsController@save') ;
$router->delete('permitions/{id}', 'App\Http\Controllers\PermitionsController@destroy') ;
$router->post('permitions/{id}', 'App\Http\Controllers\PermitionsController@update') ;


#positions
$router->get('positions', 'App\Http\Controllers\PositionsController@index') ;
$router->get('positions/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\PositionsController@index') ;
$router->get('positions/{id}', 'App\Http\Controllers\PositionsController@show') ;
$router->post('positions', 'App\Http\Controllers\PositionsController@store') ;
$router->post('positions/save', 'App\Http\Controllers\PositionsController@save') ;
$router->delete('positions/{id}', 'App\Http\Controllers\PositionsController@destroy') ;
$router->post('positions/{id}', 'App\Http\Controllers\PositionsController@update') ;

#vacation
$router->get('vacation', 'App\Http\Controllers\VacationController@index') ;
$router->get('vacation/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\VacationController@index') ;
$router->get('vacation/{id}', 'App\Http\Controllers\VacationController@show') ;
$router->post('vacation', 'App\Http\Controllers\VacationController@store') ;
$router->post('vacation/save', 'App\Http\Controllers\VacationController@save') ;
$router->delete('vacation/{id}', 'App\Http\Controllers\VacationController@destroy') ;
$router->post('vacation/{id}', 'App\Http\Controllers\VacationController@update') ;


# férias
$router->get('ferias', 'App\Http\Controllers\FeriasController@index') ;
$router->get('ferias/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\FeriasController@index') ;
$router->get('ferias/{id}', 'App\Http\Controllers\FeriasController@show') ;
$router->post('ferias', 'App\Http\Controllers\FeriasController@store') ;
$router->delete('ferias/{id}', 'App\Http\Controllers\FeriasController@destroy') ;
$router->post('ferias/{id}', 'App\Http\Controllers\FeriasController@update') ;

#open_help
$router->get('open_help', 'App\Http\Controllers\HelpDeskController@index') ;
$router->get('open_help/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\HelpDeskController@index') ;
$router->get('open_help/{id}', 'App\Http\Controllers\HelpDeskController@show') ;
$router->post('open_help', 'App\Http\Controllers\HelpDeskController@store') ;
$router->delete('open_help/{id}', 'App\Http\Controllers\HelpDeskController@destroy') ;
$router->post('open_help/{id}', 'App\Http\Controllers\HelpDeskController@update') ;

#accountability
$router->get('accountability', 'App\Http\Controllers\AccountabilityController@index') ;
$router->get('my-accountability', 'App\Http\Controllers\AccountabilityController@myIndex') ;
$router->get('accountability/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\AccountabilityController@index') ;
$router->get('accountability/{id}', 'App\Http\Controllers\AccountabilityController@show') ;
$router->post('accountability', 'App\Http\Controllers\AccountabilityController@store') ;
$router->get('new-accountability', 'App\Http\Controllers\AccountabilityController@store') ;
$router->delete('accountability/{id}', 'App\Http\Controllers\AccountabilityController@destroy') ;
$router->post('accountability/{id}', 'App\Http\Controllers\AccountabilityController@update') ;

$router->get('accountability/status/{status}', 'App\Http\Controllers\AccountabilityController@indexMy') ;
$router->get('accountability/status/{status}', 'App\Http\Controllers\AccountabilityController@indexMy') ;
$router->get('accountability/status/{status}', 'App\Http\Controllers\AccountabilityController@indexMy') ;

# index
Route::get('profiles', 'App\Http\Controllers\ProfilesController@index') ;
Route::get('users', 'App\Http\Controllers\UsersController@index') ;
Route::get('modules', 'App\Http\Controllers\ModulesController@index') ;
Route::get('labels', 'App\Http\Controllers\LabelsController@index') ;

Route::get('product_groups', 'App\Http\Controllers\ProductGroupsController@index') ;

Route::get('product_models', 'App\Http\Controllers\ProductModelsController@index') ;
Route::get('products', 'App\Http\Controllers\ProductsController@index') ;
Route::get('stock_locations', 'App\Http\Controllers\StockLocationsController@index') ;
Route::get('maintenances', 'App\Http\Controllers\MaintenancesController@index') ;
Route::get('movements', 'App\Http\Controllers\MovementsController@index') ;
Route::get('user_logs', 'App\Http\Controllers\UserLogsController@index') ;
Route::get('profile_modules', 'App\Http\Controllers\ProfileModulesController@index') ;


#abre o form para preencher os dados(new)
Route::post('profile', 'App\Http\Controllers\ProfilesController@new') ;
Route::post('module', 'App\Http\Controllers\ModulesController@new') ;
Route::post('user', 'App\Http\Controllers\UsersController@new') ;
Route::post('label', 'App\Http\Controllers\LabelsController@new') ;
Route::post('product_group', 'App\Http\Controllers\ProductGroupsController@new') ;
Route::post('product_model', 'App\Http\Controllers\ProductModelsController@new') ;
Route::post('product', 'App\Http\Controllers\ProductsController@new') ;
Route::post('stock_location', 'App\Http\Controllers\StockLocationsController@new') ;
Route::post('maintenance', 'App\Http\Controllers\MaintenancesController@new') ;
Route::post('movement', 'App\Http\Controllers\MovementsController@new') ;
Route::get('user_log', 'App\Http\Controllers\UserLogsController@new') ;
Route::get('profile_module', 'App\Http\Controllers\ProfileModulesController@new') ;

# salva o form depois de preenchido(store)
Route::post('profiles', 'App\Http\Controllers\ProfilesController@store') ;
Route::post('modulesSave', 'App\Http\Controllers\ModulesController@store') ;
Route::post('users', 'App\Http\Controllers\UsersController@store') ;
Route::post('labels', 'App\Http\Controllers\LabelsController@store') ;
Route::post('product_groups', 'App\Http\Controllers\ProductGroupsController@store') ;
Route::post('product_models', 'App\Http\Controllers\ProductModelsController@store') ;
Route::post('products', 'App\Http\Controllers\ProductsController@store') ;
Route::post('products/search', 'App\Http\Controllers\ProductsController@search') ;

Route::post('stock_locations', 'App\Http\Controllers\StockLocationsController@store') ;
Route::post('maintenances', 'App\Http\Controllers\MaintenancesController@store') ;
Route::post('movements', 'App\Http\Controllers\MovementsController@store') ;
Route::post('user_logs', 'App\Http\Controllers\UserLogsController@store') ;
Route::post('profile_modules', 'App\Http\Controllers\ProfileModulesController@store') ;

# Deleta form(destroy) 
Route::get('profiles/delete/{id}', 'App\Http\Controllers\ProfilesController@destroy') ;
Route::get('users/delete/{id}', 'App\Http\Controllers\UsersController@destroy') ;
Route::get('modules/delete/{id}', 'App\Http\Controllers\ModulesController@destroy') ;
Route::get('labels/delete/{id}', 'App\Http\Controllers\LabelsController@destroy') ;
Route::get('product_groups/delete/{id}', 'App\Http\Controllers\ProductGroupsController@destroy') ;
Route::get('product_models/delete/{id}', 'App\Http\Controllers\ProductModelsController@destroy') ;
Route::get('products/delete/{id}', 'App\Http\Controllers\ProductsController@destroy') ;
Route::get('stock_locations/delete/{id}', 'App\Http\Controllers\StockLocationsController@destroy') ;
Route::get('maintenances/delete/{id}', 'App\Http\Controllers\MaintenancesController@destroy') ;
Route::get('movements/delete/{id}', 'App\Http\Controllers\MovementsController@destroy') ;
Route::get('user_logs/delete/{id}', 'App\Http\Controllers\UserLogsController@destroy') ;
Route::get('profile_modules/delete/{id}', 'App\Http\Controllers\ProfileModulesController@destroy') ;


#Abre o form para editar(show)
Route::get('users/{id}', 'App\Http\Controllers\UsersController@show') ;
Route::get('profiles/{id}', 'App\Http\Controllers\ProfilesController@show') ;
Route::get('modules/{id}', 'App\Http\Controllers\ModulesController@show') ;
Route::get('stock_locations/{id}', 'App\Http\Controllers\StockLocationsController@show') ;
Route::get('products/{id}', 'App\Http\Controllers\ProductsController@show') ;
Route::get('product_models/{id}', 'App\Http\Controllers\ProductModelsController@show') ;
Route::get('product_groups/{id}', 'App\Http\Controllers\ProductGroupsController@show') ;
Route::get('labels/{id}', 'App\Http\Controllers\LabelsController@show') ;
Route::get('maintenances/{id}', 'App\Http\Controllers\MaintenancesController@show') ;
Route::get('movements/{id}', 'App\Http\Controllers\MovementsController@show') ;
Route::get('user_logs/{id}', 'App\Http\Controllers\UserLogsController@show') ;
Route::get('profile_modules/{id}', 'App\Http\Controllers\ProfileModulesController@show') ;



# salva a edição no form(update)
Route::post('profiles/{id}', 'App\Http\Controllers\ProfilesController@update') ;
Route::post('users/{id}', 'App\Http\Controllers\UsersController@update') ;
Route::post('modules/{id}', 'App\Http\Controllers\ModulesController@update') ;
Route::post('stock_locations/{id}', 'App\Http\Controllers\StockLocationsController@update') ;
Route::post('products/{id}', 'App\Http\Controllers\ProductsController@update') ;
Route::post('product_models/{id}', 'App\Http\Controllers\ProductModelsController@update') ;
Route::post('product_groups/{id}', 'App\Http\Controllers\ProductGroupsController@update') ;
Route::post('labels/{id}', 'App\Http\Controllers\LabelsController@update') ;
Route::post('maintenances/{id}', 'App\Http\Controllers\MaintenancesController@update') ;
Route::post('movements/{id}', 'App\Http\Controllers\MovementsController@update') ;
Route::post('user_logs/{id}', 'App\Http\Controllers\UserLogsController@update') ;
Route::post('profile_modules/{id}', 'App\Http\Controllers\ProfileModulesController@update') ;



Route::post('show_mov', 'App\Http\Controllers\MovementsController@showMov') ;
Route::get('show_mov', 'App\Http\Controllers\MovementsController@showMov') ;
Route::post('show_log', 'App\Http\Controllers\UserLogsController@showLog') ;
Route::post('show_perfil', 'App\Http\Controllers\ProfileModulesController@showPerfil') ;
Route::get('show_perfil', 'App\Http\Controllers\ProfileModulesController@showPerfil') ;
Route::post('show_filtrar', 'App\Http\Controllers\ProductsController@showFiltrar') ;


#==============================================================================================

#manufacturer
Route::get('manufacturer', 'App\Http\Controllers\ManufacturerController@index') ;
Route::get('manufacturer/{id}', 'App\Http\Controllers\ManufacturerController@show') ;
Route::get('manufacturer/delete/{id}', 'App\Http\Controllers\ManufacturerController@destroy') ;
Route::post('manufacturer/{id}', 'App\Http\Controllers\ManufacturerController@update') ;
Route::post('manufacturer', 'App\Http\Controllers\ManufacturerController@store') ;
Route::post('manufacture', 'App\Http\Controllers\ManufacturerController@new') ;

Route::get('profiles/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\ProfilesController@index') ;
// Route::post('profiles/{id}', 'App\Http\Controllers\ProfilesController@update') ;

# modulos
Route::get('users/{limit}/{offset}/{order}/{search}', 'App\Http\Controllers\ModulesController@index') ;
// Route::get('users/{id}', 'App\Http\Controllers\ModulesController@show') ;
// Route::post('users', 'App\Http\Controllers\ModulesController@store') ;
// Route::delete('users/{id}', 'App\Http\Controllers\ModulesController@destroy') ;
// Route::post('users/{id}', 'App\Http\Controllers\ModulesController@update') ;

Route::get('/import-motions', 'App\Http\Controllers\DashboardController@importMotions');


Route::get('/validate-user', 'App\Http\Controllers\DashboardController@validateUser');

Route::post('/save-permissions', 'App\Http\Controllers\ProfileModulesController@savePermissions');


$router->group( ['prefix' => 'study-case'] , function() use ($router) {

    Route::post('/login', 'App\Http\Controllers\StudentsController@logar');

    Route::get('/phrases', 'App\Http\Controllers\PhrasesController@getPhrases');

    Route::get('/attendances', 'App\Http\Controllers\AttendancesController@getByStudent');

    Route::post('/attendances-messages', 'App\Http\Controllers\AttendancesMessagesController@save');
    
} ) ;