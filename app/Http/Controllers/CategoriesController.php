<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
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