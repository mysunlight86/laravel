<?php


namespace App\Models;


class Category
{
    private $categories = [
        1 => 'Education',
        2 => 'Food',
        3 => 'Relax',
    ];

    public function getCategoryById(int $categoryId)
    {
        return $this->categories[$categoryId];
    }

    public function getCategoriesList()
    {
        return $this->categories;
    }
}


