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


Route::get('/',["as"=>"route.login","uses"=>"HomeController@login"]);
Route::get('/parking',["as"=>"route.index","uses"=>"HomeController@index"]);
Route::get('/rol',["as"=>"route.rol","uses"=>"HomeController@roles"]);
Route::get('/clasevehiculos',["as"=>"route.clasevehiculos","uses"=>"HomeController@clasevehiculos"]);
Route::get('/especialidad',["as"=>"route.especialidad","uses"=>"HomeController@especialidad"]);
Route::get('/fichas',["as"=>"route.fichas","uses"=>"HomeController@fichas"]);
Route::get('/modelovehiculo',["as"=>"route.modelovehiculo","uses"=>"HomeController@modelovehiculo"]);
Route::get('/programas',["as"=>"route.programas","uses"=>"HomeController@programas"]);
Route::get('/registros',["as"=>"route.registros","uses"=>"HomeController@registros"]);
Route::get('/marcas',["as"=>"route.marcas","uses"=>"HomeController@marcas"]);
Route::get('/documento',["as"=>"route.documento","uses"=>"HomeController@documento"]);
Route::get('/usuario/eliminar',["as"=>"route.usuarioeli","uses"=>"HomeController@usuarioeli"]);
Route::get('/usuario/crear',["as"=>"route.crearusu","uses"=>"HomeController@crearusu"]);
Route::get('/usuario-edita',["as"=>"route.Editarusu","uses"=>"HomeController@Editarusu"]);


