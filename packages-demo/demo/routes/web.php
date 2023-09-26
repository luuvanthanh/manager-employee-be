<?php

use Botble\Demo\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['namespace' => 'Botble\Demo\Http\Controllers'], function () {
//     Route::get('/demo', 'DemoController@getIndex');
// });
Route::get('/demo', [DemoController::class, 'getIndex']);
