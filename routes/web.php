<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GreetingController;
use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\NewsController;

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

Route::get('/greeting', [GreetingController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/news/item/{id}', [NewsController::class, 'index'])
    ->name('news-item')
    ->where('id', '[1-3]+');
