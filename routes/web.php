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
})->name('home');

Route::get('/info', function(){
  return view('pages.info');
})->name('info');

Route::get('/trocas', function(){
  return view('pages.trocas');
})->name('trocas');

Route::get('/contato', function(){
  return view('pages.contato');
})->name('contato');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');

Route::post('upload', 'UploadController@store')->name('upload');
