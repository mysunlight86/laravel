<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Source;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function createCategory(Request $request)
    {
        // dd($request);
        // dd($request->method());
        // if($request->isMethod('POST')){
        //     dd($request->all());
        // }
        if($request->isMethod('POST')){
            // dd($request->input('category'));
            $model = new Category();
            $model->name = $request->input('category');
            $model->save();
        }
        return redirect()->route('admin_news_create-category-view');
    }

    public function createCategoryView()
    {
        return view('admin.news.createNewsCategory');
    }

    public function createSource(Request $request)
    {
        if($request->isMethod('POST')){
            // dd($request->input('source'));
            $model = new Source();
            $model->url = $request->input('source');
            $model->save();
        }
        return redirect()->route('admin_news_create-source-view');
    }

    public function createSourceView()
    {
        return view('admin.news.createNewsSource');
    }

    /* public function createNews(Request $request)
    {
        if($request->isMethod('POST')){
            // dd($request->input('news'));
            $newsArray = $request->input('news');
            // dd($newsArray, $newsArray['category']);
            $model = new News();
            // $model->category_id = $newsArray['category'];
            // $model->source_id = $newsArray['source'];
            // $model->title = $newsArray['title'];
            // $model->text = $newsArray['text'];

            $model->save();
        }
        return redirect()->route('admin_news_create-news-view');
    }

    public function createNewsView()
    {
        $categories = Category::query()
            ->get();
        $sources = Source::query()
            ->get();
        // dd($categories, $sources);
        return view('admin.news.createNewsItem', ['categories' => $categories, 'sources' => $sources]);
    } */

    public function add(Request $request)
    {
        $model = new News();
        if ($request->isMethod('post')) {
            $newsArray = $request->input('news');
            $model->category_id = $newsArray['category_id'];
            $model->source_id = $newsArray['source_id'];
            $model->title = $newsArray['title'];
            $model->text = $newsArray['text'];
            // $model->fill($request->all());
            $model->save();
            return redirect()->route('news_index');
        }
        $categories = Category::query()
            ->get();
        $sources = Source::query()
            ->get();
        // dd($model);
        return view('admin.news.createNewsItem', [
            'news' => $model,
            'rout' => 'admin_news_addNews',
            'title' => 'Adding news',
            'categories' => $categories,
            'sources' => $sources,
        ]);
    }

    /* public function editNews($id)
    {
        if($request->isMethod('POST')){
            $model = News::find($id);
            $model->save();
        }
        return redirect()->route('news_item', ['id' => $id]);
    }

    public function editNewsView($id)
    {
        echo('123');
        // dd($id);
        $categories = Category::query()
            ->get();
        // dd($categories);
        
        $sources = Source::query()
            ->get();
        $newsOne = News::find($id);
        // dd($newsOne);
        return view('admin.news.updateNewsItem', ['categories' => $categories, 'sources' => $sources, 'newsOne' => $newsOne]);
    } */

    public function update(Request $request, News $news)
    {
        dump($news);
        if ($request->isMethod('post')) {
            // dd($request->all());
            $newsArray = $request->input('news');
            $news->category_id = $newsArray['category_id'];
            $news->source_id = $newsArray['source_id'];
            $news->title = $newsArray['title'];
            $news->text = $newsArray['text'];
            // $news->fill($request->all());
            $news->save();
            return redirect()->route('news_index');
        }
        $categories = Category::query()
            ->get();
        $sources = Source::query()
            ->get();
        return view('admin.news.createNewsItem', [
            'news' => $news,
            'rout' => 'admin_news_updateNews',
            'title' => 'Editing news',
            'categories' => $categories,
            'sources' => $sources,
        ]);
    }

    public function delete(News $news)
    {
        dump($news);
        $news->delete();
        return redirect()->route('news_index');
    }
}