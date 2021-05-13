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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/personas','App\Http\Controllers\PersonaController');

Route::resource('/diligencias','App\Http\Controllers\DiligenciaController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home/personas', function(){
// 	return view('personas.index');
// });

// Route::get('/home/personas/create', function(){
// 	return view('personas.create');
// });