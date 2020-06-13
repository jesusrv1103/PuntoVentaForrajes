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


Route::get('/', 'Admin\HomeController@index')->name('home');

Route::group(
    [
      'prefix' => 'admin',
      'namespace' => 'Admin',
    ],
    function () {
        //articulos
        Route::get('articulos', 'ArticuloController@index')->name('admin.articulos.index');
        Route::get('articulos/create', 'ArticuloController@create')->name('admin.articulos.create');
        Route::post('articulos', 'ArticuloController@store')->name('admin.articulos.store');
        Route::get('articulos/{articulos}/edit', 'ArticuloController@edit')->name('admin.articulos.edit');
        Route::put('articulos/{articulos}', 'ArticuloController@update')->name('admin.articulos.update');
        Route::delete('articulos/{articulos}', 'ArticuloController@destroy')->name('admin.articulos.destroy');
    }
);