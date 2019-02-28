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
/*Route::group(['middleware' => 'auth'], function(){
    
}); */

Route::group(['middleware' => 'auth'], function() {
    Route::get('catalog',           'CatalogController@getIndex');
    Route::get('catalog/create',    'CatalogController@getCreate');
    Route::get('catalog/show/{id}', 'CatalogController@getShow');
    Route::get('catalog/edit/{id}', 'CatalogController@getEdit');    
    Route::post('catalog/create',   'CatalogController@postCreate');
    Route::put('catalog/edit/{id}', 'CatalogController@putEdit');
    Route::put('catalog/rent/{id}', 'CatalogController@putRent');
    Route::put('catalog/return/{id}', 'CatalogController@putReturn');
    Route::delete('catalog/delete/{id}', 'CatalogController@deleteMovie');
});

/*Route::get('/movie/{$id?}', 'MoviesController@showMovie');*/

Route::get('/', 'HomeController@getHome');
/*Route::get('/', function () {
    //return "<h2>Bienvenido Página Principal</h2>";
    return view('home');
});*/

/*Route::get('login', function () {
    //return "<h2>Bienvenido Página Login</h2>";
    return view('auth.login');
});*/
/*Route::get('logout', function () {
    return "<h2>Bienvenido Página Logout</h2>";
});*/

//Route::get('catalog', 'CatalogController@getIndex');
/*Route::get('catalog', function () {
    //return "<h2>Bienvenido Página Listado Películas</h2>";
    return view('catalog.index');
});*/

//Route::get('catalog/show/{id}', 'CatalogController@getShow');
/*Route::get('catalog/show/{id?}', function ($id) {
    //return "<h2>Bienvenido Página Vista Detalle Película</h2>";
    return view('catalog.show', array('id'=>$id));
});*/

//Route::get('catalog/create', 'CatalogController@getCreate');
/*Route::get('catalog/create', function () {
    //return "<h2>Bienvenido Página Añadir Película</h2>";
    return view('catalog.create');
});*/

//Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
/*Route::get('catalog/edit/{id?}', function ($id) {
    //return "<h2>Bienvenido Página Modificar Película</h2>";
    return view('catalog.edit', array('id'=>$id));
}) ->middleware(['auth','mymiddle']);*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
