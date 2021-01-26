<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            [
                'name' => 'プログラミング',
                'thumbnail' => 'programing.png',
                'sort' => 1
            ],
            [
                'name' => '音楽',
                'thumbnail' => 'music.png',
                'sort' => 2
            ],
            [
                'name' => '歴史',
                'thumbnail' => 'history.png',
                'sort' => 3
            ],
            [
                'name' => 'ビジネス',
                'thumbnail' => 'business.png',
                'sort' => 4
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
