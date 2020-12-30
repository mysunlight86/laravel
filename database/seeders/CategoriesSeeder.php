<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')
            ->insert($this->generateData());
    }

    protected function generateData(): array
    {
        $data = [];
        $data[] = [
            'name' => 'Education',
        ];
        $data[] = [
            'name' => 'Food',
        ];
        $data[] = [
            'name' => 'Relax',
        ];
        return $data;
    }
}
