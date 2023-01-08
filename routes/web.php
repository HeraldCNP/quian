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
//     return view('pages.welcome');
// });

Route::view('/', 'pages.welcome')->name('inicio');
Route::view('/about', 'pages.about')->name('acerca');
Route::view('/servicios', 'pages.services')->name('servicios');
Route::view('/contacto', 'pages.contact')->name('contacto');



