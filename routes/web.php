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
    return view('welcome');
});
/*
Route::get('/form', function () {
    return view('blank');
});

Route::get('/table', function () {
    return view('table');
});
*/
Route::resource('student', 'stud_controller');
Route::resource('city', 'CityController');
