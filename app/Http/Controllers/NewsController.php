<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    public function index()
    {
        $categories = (new Category())->getCategoriesList();
        return view(
            'news.index', 
            ['categories' => $categories]
        );
    }

    public function getCategory($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view(
            'news.category', 
            ['news' => $news]
        );
    }

    public function renderNews($id)
    {
        $news = (new News())->getById($id);
        return view(
            'news.item', 
            ['news' => $news]
        );
    }
}
