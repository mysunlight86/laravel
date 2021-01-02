<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()
            ->paginate(5);
        return view(
            'news.index', 
            ['news' => $news]
        );
    }

    public function categories()
    {
        dd(News::all());
        $result = DB::table('categories')
            ->get();

        $categories = [];
        foreach ($result as $item) {
            $categories[] = $item->name;
        }
        return view(
            'news.index', 
            ['categories' => $categories]
        );
    }

    public function getByCategory($categoryId)
    {
        dd(News::all());

        $sql = 'SELECT * FROM news WHERE category_id = :categoryId';
        $news = DB::select($sql, [':categoryId' => $categoryId]);

        // dd(News::all());

        return view(
            'news.category', 
            ['news' => $news]
        );
    }

    public function renderNews($id)
    {
        $sql = 'SELECT * FROM news WHERE id = :id';
        $newsOne = DB::select($sql, [':id' => $id]);
        return view(
            'news.item', 
            ['newsOne' => $newsOne]
        );
    }
}
