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


use Illuminate\Support\Facades\Redirect;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BienvenidoController@index');

//Route::get('/login', 'BienvenidoController@index');

Route::get('/home/solicitud', 'HomeController@show');


Route::get('/home/solicitud/{id}/category', 'HomeController@byCategory');

Route::group(['middleware'=>'admin','namespace'=>'Admin'],function(){

   // Route::get('category/{id}/subcategoy','SubCategoryController@byCategory');
});

