<?php


namespace App\Models;


class News
{
    private $news = [
        1 => [
            'id' => 1,
            'title' => 'News 1',
            'content' => 'News 1 content',
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'News 2',
            'content' => 'New2 content',
            'category_id' => 2
        ],
        3 => [
            'id' => 3,
            'title' => 'News 3',
            'content' => 'New3 content',
            'category_id' => 3
        ],
        4 => [
            'id' => 4,
            'title' => 'News 4',
            'content' => 'New4 content',
            'category_id' => 1
        ],
        5 => [
            'id' => 5,
            'title' => 'News 5',
            'content' => 'New5 content',
            'category_id' => 2
        ]
    ];

    public function getById(int $id)
    {
        return $this->news[$id];
    }

    public function getByCategoryId(int $categoryId)
    {
        $news = [];
        foreach ($this->news as $id => $item) {
            if($item['category_id'] == $categoryId) {
                $news[$id] = $item;
            }
        }
        return $news;
    }
}