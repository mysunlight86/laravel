<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'news 11',
            'news 12',
        ],
        2 => [
            'news 21',
            'news 22',
        ],
        3 => [
            'news 31',
            'news 32',
        ],
    ];

    public function index($id)
    {
        echo "News page {$id}";

        // dd($this->news[$id]);

        foreach ($this->news[$id] as $item) {
            echo "<p>{$item}</p>";
        }
    }
}
