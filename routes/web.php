<?php

use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/films',FilmController::class)->middleware('auth'); //cosi metto tutto in login quello che voglio sbloccare sarà in un controller
                                                                     //denominato nel mio cado dashboard e con una rotta a parte vedi rotte pubbliche

// rotte pubbliche

Route::get('/films', 'DashboardController@index')->name('public.films.index');


Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::resource('/films',FilmController::class);
});
