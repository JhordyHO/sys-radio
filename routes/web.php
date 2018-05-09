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
Route::get('admin','AdminController@AdminCon');
Route::get('usuario','UduarioController@UsuarioCon');
Route::get('programacion','HomeController@programacion');
Route::get('ranking','HomeController@ranking');
Route::get('djs','HomeController@djs');
Route::get('noticias','HomeController@noticias');
Route::get('galeria','HomeController@galeria');
Route::get('nosotros','HomeController@nosotros');
Route::get('contacto','HomeController@contacto');
