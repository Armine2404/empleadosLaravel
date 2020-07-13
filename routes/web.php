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

Route::get('/', function () {
    return view('welcome');
});
// empresas
Route::get('/home', 'EmpresaController@index');
Route::get('/empresa/destroy/{empresa}', 'EmpresaController@destroy');
Route::get('/empresa/edit/{empresa}', 'EmpresaController@edit');
Route::post('/update/{empresa}', 'EmpresaController@update');
Route::get('/create', 'EmpresaController@create');
Route::post('/e', 'EmpresaController@store');
// fin empresas
// empleados
Route::get('/empleados/create', 'EmpleadosController@create');
Route::get('/empleados/index', 'EmpleadosController@index');
Route::post('/empleados/store', 'EmpleadosController@store');
Route::get('/empleado/destroy/{empleados}', 'EmpleadosController@destroy');
Route::get('/empleado/edit/{empleados}', 'EmpleadosController@edit');
Route::post('/empleados/update/{empleados}', 'EmpleadosController@update');
Auth::routes();

