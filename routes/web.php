<?php

use App\Mail\message;
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
})->name('home');

Route::get('/info', function(){
  return view('pages.info');
})->name('info');

Route::get('/trocas', function(){
  return view('pages.trocas');
})->name('trocas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('area.restrita');

Route::get('/usuario', 'HomeController@usuario')->name('usuario');

Route::get('contato' , 'ContactUSController@contactUS')->name('contato');
Route::post('contato' , ['as'=>'contactus.store' , 'uses'=>'ContactUSController@contactUSPost']);
