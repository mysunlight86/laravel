<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        'Education',
        'Food',
        'Relax',
    ];

    public function index()
    {
        echo "News categories";

        // dd($this->news);

        foreach ($this->news as $category) {
            echo "<p>{$category}</p>";
        }
    }
}
