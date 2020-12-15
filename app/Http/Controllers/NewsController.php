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
        echo "News categories";

        foreach ($this->news as $category => $arrayCategory) {
            $url = route('news__category', ['category' => $category]);
            echo "<p><a href='{$url}'>{$category}</a></p>";
        }
    }

    public function getCategory($category)
    {
        echo "News page {$category}";

        foreach ($this->news[$category] as $itemNews => $item) {
            $url = route('news__item', ['category' => $category, 'id' => $itemNews]);
            echo "<p><a href='{$url}'>{$item}</a></p>";
        }
    }

    public function renderNews($category, $id)
    {
        echo "News {$id}";
    }
}
