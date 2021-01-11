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
        $news = News::query()
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view(
            'news.index', 
            ['news' => $news]
        );
    }

    public function categories()
    {
        $categories = Category::query()
            ->get();
        return view(
            'news.categories', 
            ['categories' => $categories]
        );
    }

    public function getByCategory($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view(
            'news.category', 
            ['news' => $news]
        );
    }

    public function renderNews($id)
    {
        $newsOne = News::find($id);
        return view(
            'news.item', 
            ['newsOne' => $newsOne]
        );
    }
}
