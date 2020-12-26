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

    public function create()
    {
        dump($_POST);
        return view('admin.news.createNewsCategory');
    }
}