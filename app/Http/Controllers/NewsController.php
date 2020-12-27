<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Education',
        2 => 'Food',
        3 => 'Relax',
    ];

    public function index()
    {
        return view(
            'news.index', 
            ['categories' => $this->categories]
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
