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

/*Route::get('/', function () {
return view('home');
});*/
Route::get('/' , 'HomeController@getHome');
/*
Route::get('/login' , function() {
return view('auth.login');
});
Route::get('/logout' , function() {
return view('home');
});
/*Route::get('/catalog' , function() {
return view('catalog.index');
});
Route::get('/catalog/show{id}' , function() {
return view('catalog.show');
});
Route::get('/catalog/create' , function() {
return view('catalog.create');
});
Route::get('/catalog/edit{id}' , function() {
return view('catalog.edit');
});*/
Route::group(['middleware' => 'auth'], function(){
Route::get('/catalog' , 'CatalogController@getIndex');
Route::get('/catalog/show/{id}' , 'CatalogController@getShow');
Route::get('/catalog/create' , 'CatalogController@getCreate');
Route::get('/catalog/edit/{id}' , 'CatalogController@getEdit');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');