<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');


});

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::group(['middleware'=>'web'], function()


 Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function () {
 	Route::resource('jaket','jaketController');
 	Route::resource('bahan','bahanjaketController');
 	Route::resource('kategori','kategoriController');

 	Route::resource('blog','blogcontroller');


   });

 Route::get('test', function(){
 	return view ('layouts.backend');
 });

