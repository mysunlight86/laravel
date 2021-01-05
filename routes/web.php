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

    Route::get('/categories', [NewsController::class, 'categories'])
        ->name('categories');

    Route::get('/category/{categoryId}', [NewsController::class, 'getByCategory'])
        ->name('category')
        ->where('categoryId', '[0-9]+');

    Route::get('/news-item/{id}', [NewsController::class, 'renderNews'])
        ->name('item')
        ->where('id', '[0-9]+');
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
    Route::get('/create-category', 'NewsController@createCategoryView')
        ->name('create-category-view');
    Route::post('/create-category', 'NewsController@createCategory')
        ->name('create-category');
    Route::get('/create-source', 'NewsController@createSourceView')
        ->name('create-source-view');
    Route::post('/create-source', 'NewsController@createSource')
        ->name('create-source');
    Route::get('/create-news', 'NewsController@createNewsView')
        ->name('create-news-view');
    Route::post('/create-news', 'NewsController@createNews')
        ->name('create-news');
    Route::get('/edit-news/{$id}', 'NewsController@editNewsView')
        ->name('edit-news-view')
        ->where('id', '[0-9]+');
    Route::post('/update-news', 'NewsController@editNews')
        ->name('edit-news');
});
