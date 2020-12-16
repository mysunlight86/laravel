<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        'education' => [
            11 => 'news 11',
            12 => 'news 12',
        ],
        'food' => [
            21 => 'news 21',
            22 => 'news 22',
        ],
        'relax' => [
            31 => 'news 31',
            32 => 'news 32',
        ],
    ];

    public function index()
    {
        return view('news.index', ['news' => $this->news]);
    }

    public function getCategory($category)
    {
        $newsCategory = $this->news[$category];
        return view('news.category', ['newsCategory' => $newsCategory, 'category' => $category]);
    }

    public function renderNews($category, $id)
    {
        return view('news.item', ['id' => $id, 'category' => $category]);
    }
}
