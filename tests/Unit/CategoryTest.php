<?php

namespace Tests\Unit;

use App\Models\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $model = new Category();

        $data = $model->getCategoriesList();
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        foreach ($data as $item) {
            $this->assertIsString($item);
        }

    }

    public function testExample2()
    {
        $model = new Category();

        $data = $model->getCategoryById(1);
        $this->assertEquals('Education', $data);
    }

    public function testExample3()
    {
        $model = new Category();

        $data = $model->getCategoryById(2);
        $this->assertEquals('Food', $data);
    }

    public function testExample4()
    {
        $model = new Category();

        $data = $model->getCategoryById(3);
        $this->assertEquals('Relax', $data);
    }
}
