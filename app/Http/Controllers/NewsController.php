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

        // dd($this->news);

        foreach ($this->news as $category => $arrayCategory) {
            $url = route('news__category', ['category' => $category]);
            // dd($url, $category);
            // dd($url . '/' . $category);
            echo "<p><a href='{$url}'>{$category}</a></p>";
        }
    }

    public function getCategory($category)
    {
        echo "News page {$category}";

        // dd($this->news[$id]);

        foreach ($this->news[$category] as $itemNews => $item) {
            // $url = route('news-item', ['id' => $category]);
            // dd($url);
            // echo "<div><a href='{$url}'>{$item['title']}</a></div>";

            $url = route('news__item', ['category' => $category, 'id' => $itemNews]);
            // dd($url, $item, $itemNews);
            echo "<p><a href='{$url}'>{$item}</a></p>";

            // foreach ($arrayNews as $itemNews => $item) {
            //     $url = route('news__item', ['category' => $category, 'id' => $itemNews]);
            //     // dd($url, $item, $itemNews);
            //     echo "<p><a href='{$url}'>{$item}</a></p>";
            // }
        }

        // foreach ($this->news[$category] as $item) {
        //     echo "<p>{$item}</p>";
        // }
    }

    public function renderNews($category, $id)
    {
        echo "News {$id}";

        
    }
}
