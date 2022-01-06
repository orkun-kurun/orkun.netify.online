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

/*  Basic Routing */
Route::get('/', function () {
    return View::make('pages.homepage');
});

Route::get('/thesis-form', function () {
    return View::make('pages.thesis-form');
});

Route::get('/thesis', function () {
    return View::make('pages.thesis');
});

Route::get('/authors', function () {
    return View::make('pages.authors');
});

Route::get('/search', function () {
    return View::make('pages.search');
});

/*  Thesis Form Input */
Route::get('/insert', 'App\Http\Controllers\ThesisFormController@index')->name('thesis form');
Route::post('/create', 'App\Http\Controllers\ThesisFormController@store')->name('thesis form create');
