<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('index_path');

Route::get('/moniteur',  'PagesController@moniteurs')->name('moniteurs_path');

Route::get('/enfant',  'PagesController@enfants')->name('enfants_path');  

// Route::get('/enfants/create',  'EnfantsController@create')->name('create_path');
  