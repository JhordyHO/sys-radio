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
Route::get('horario','HomeController@horario');
Route::get('djs','HomeController@djs');
Route::get('welcome','HomeController@index2');
Route::get('blog','HomeController@blog');
Route::get('galeria','HomeController@galeria');
Route::get('faq','HomeController@faq');
Route::get('contacto','HomeController@contacto');
