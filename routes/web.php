<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Validator;

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
Route::resource('/users','App\Http\Controllers\UserController');
Route::resource('/permisos','App\Http\Controllers\PermisoController');

Route::resource('/reportepermisos','App\Http\Controllers\ReportePermisoController');
Route::resource('/reportediligencias','App\Http\Controllers\ReporteDiligenciaController');
Route::resource('/reportevisitas','App\Http\Controllers\ReporteVisitaController');
Route::resource('/login','App\Http\Controllers\LoginController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pdf-diligencias', 'App\Http\Controllers\PDFDiligenciaController@PDF')->name('PDF-diligencias');
Route::get('/pdf-permisos', 'App\Http\Controllers\PDFPermisoController@PDF')->name('PDF-permisos');
Route::get('/pdf-visitas', 'App\Http\Controllers\PDFVisitaController@PDF')->name('PDF-visitas');

Route::get('/search-diligencias', function(){
 return view('reportediligencias.search');
});


// Route::get('/passwords/reset', function(){
//  return view('auth.passwords.reset');
// });

// Route::get('/home/personas', function(){
// 	return view('personas.index');
// });

// Route::get('/home/personas/create', function(){
// 	return view('personas.create');
// });

Route::view('login','login')->middleware('guest');

Route::post('login',function(){
    $credentials = request()->validate([
    	'email' => ['required', 'email', 'string'],
    	'password' => ['required', 'string']
    ]);

    $remember = request()->filled('remember');

    if (Auth::attempt($credentials,$remember)){
    	request()->session()->regenerate();
    	return redirect('home')->with('status', 'Estás logueado');
    }else{
    	return back()->withErrors([
    		'email' => __('auth.failed')
    	]);
    }
});
