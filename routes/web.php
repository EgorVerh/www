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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


Route::get('/shkaf','Mycontroller@shkaf');

Route::get('/polki/{id}','Mycontroller@polki');
Route::get('/polki/books/{id}','Mycontroller@booksonpolke');
Route::get('/authors/{id}','Mycontroller@booksauthors');
Route::get('/author/books/{id}','Mycontroller@authorbooks');

Route::get('/', function () {
  return view('welcome');
});

Route::get('/my', function () {
  $visited = DB::select('select * from places where visited = ?', [1]);	
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('myoform', ['visited' => $visited, 'togo' => $togo ] );
});


