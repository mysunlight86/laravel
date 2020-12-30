<?php

namespace App\Http\Controllers;

// use App\Models\News;
// use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        // dd(DB);

       /* $sql = "SELECT * FROM categories";
        // $result = D::select($sql);
        // $result = DB::statement($sql);
        // dump($result);
        $result = DB::select($sql); */

        // $categories = (new Category())->getCategoriesList();

        $categories = [];


        

     /*   $sql = "SELECT * FROM categories WHERE id = :id";
        $result = DB::select($sql, [':id' => 2]);
         dd($result); */

      /*   $result = DB::table('categories')
            ->where(["id" => 3])
            ->get(); */

            // $result = DB::table('news')
            //     ->get();

        $result = DB::table('categories')
            ->get();

        foreach ($result as $item) {
            // dump($item);
            // dump($item->name);
            $categories[] = $item->name;
        }

        // dd($result->toArray());

        // dump($categories);
        // dd($categories);
        // dump($categories);
        return view(
            'news.index', 
            ['categories' => $categories]
        );
    }

    public function getCategory($categoryId)
    {
        $sql = 'SELECT * FROM news WHERE category_id = :categoryId';
        $news = DB::select($sql, [':categoryId' => $categoryId]);
        // $result = DB::table('news')
        //     ->where(['category_id' => $categoryId])
        //     ->get();

      /*  $news = [];
        foreach ($result as $id => $item) {
            // dump($item);
            // dump($item->name);
            $news[$id + 1] = $item;
        //     $news[$id + 1] = $item->title;
        } */

        // dd($news);

        // foreach ($this->news as $id => $item) {
        //     if($item['category_id'] == $categoryId) {
        //         $news[$id + 1] = $item;
        //     }
        // }

        // $news = (new News())->getByCategoryId($categoryId);
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
