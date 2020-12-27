<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GreetingController;
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

Route::get('/greeting', [GreetingController::class, 'index'])
    ->name('greeting');

Route::get('/about', function () {
    return view('about');
})
    ->name('about');

Route::group([
    'prefix' => 'news',
    'as' => 'news_',
], function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');

    Route::get('/{category}', [NewsController::class, 'getCategory'])
        ->name('category');

    Route::get('/{category}/{id}', [NewsController::class, 'renderNews'])
        ->name('item');
});

/**
 * Admin news
 */
Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin_news_',
    'namespace' => '\App\Http\Controllers\Admin'
], function () {
    Route::get('/', 'NewsController@index')
        ->name('index');
    Route::get('/create', 'NewsController@createCategoryView')
        ->name('create-category-view');
    Route::post('/create', 'NewsController@createCategory')
        ->name('create-category');
    Route::get('/create-news', 'NewsController@createNewsView')
        ->name('create-news-view');
    Route::post('/create-news', 'NewsController@createNews')
            ->name('create-news');
});
