<?php



//---------------- rutas de la pagina web ------------------>
Route::get('/','HomeController@webIndex');
Route::get('home','AdminController@adminView');
Route::get('admin','AdminController@adminView');
Route::get('usuario','UduarioController@UsuarioCon');
Route::get('horario','HomeController@horario');
Route::get('djs','HomeController@djs');
Route::get('welcome','HomeController@index2');
Route::get('noticias','HomeController@noticias');
Route::get('galeria','HomeController@galeria');
Route::get('faq','HomeController@faq');
Route::get('contacto','HomeController@contacto');


Auth::routes();
Route::get('/authfb', 'Auth\SocialController@login')->name('authfb');// login facebook route
//---- Router Noticias -------
Route::get('nuevaNoticia','AdminController@newNoticia');
Route::get('noticia/{slug}','AdminController@NoticiaView');
Route::post('saveNoticia','AdminController@saveNoticia');




//______________Ajax___________________
Route::get('getPost','AdminController@getPost');
//_____________________________________

