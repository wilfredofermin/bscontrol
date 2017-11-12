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

Route::get('/home/solicitud', 'HomeController@show');

Route::filter('/home', function(){
    if(Auth::guest()){
        return Redirect::route('login');
    }else{
        //cambiar caja de ahorro por rol de administrador
        if(Auth::user()->roll != 1)
        {
            return Redirect::to('/home/solicitud')->with('danger','No puedes acceder a esa seccion');
        }
    }
});

