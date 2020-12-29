<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return '<h1>Admin main page</h1>';
    }

    public function createCategory()
    {
        return redirect()->route('admin_news_create-category-view');
    }

    public function createCategoryView()
    {
        return view('admin.news.createNewsCategory');
    }

    public function createNews()
    {
        return redirect()->route('admin_news_create-news-view');
    }

    public function createNewsView()
    {
        return view('admin.news.createNewsItem');
    }
}