<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('adm', function(){
    return view('admin.index');
});

Route::get('adm/registerprueba',function (){
    return view('admin.registerprueba');
});

Route::resource('users','UserController');

Route::resource('laborantes','LaboranteController');

Route::resource('maquinaria','MaquinariaController');