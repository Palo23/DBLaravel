<?php

use App\Libro;
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

    $libros = Libro::all();
    return view('home', compact('libros'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
