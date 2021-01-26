<?php

use App\Title;
use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate();

        $titles =  [
            [
                'category_id' => 1,
                'title' => 'フロントエンドクイズ',
                'description' => 'フロントエンドにまつわるクイズです。',
                'thumbnail' => 'frontend.png'
            ],
            [
                'category_id' => 2,
                'title' => 'ギタークイズ',
                'description' => 'ギターにまつわるクイズです。',
                'thumbnail' => 'quitar.png'
            ],
            [
                'category_id' => 3,
                'title' => 'サピエンス全史クイズ',
                'description' => '「サピエンス全史」に関するクイズです。',
                'thumbnail' => 'homo.png'
            ],
            [
                'category_id' => 4,
                'title' => 'ビジネスパーソンの常識クイズ',
                'description' => '現在社会に生きるビジネスパーソンの常識に関するクイズです。',
                'thumbnail' => 'business-person.png'
            ],
        ];

        foreach ($titles as $title) {
            Title::create($title);
        }
    }
}
