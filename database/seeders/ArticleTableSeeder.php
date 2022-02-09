<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 

        for($i=0;$i<25;$i++){

            $article = $faker->sentence(3);

            $keywanddesc = $faker->sentence(10);

            $content = $faker->sentence(50);

            Article::create([
                'picture'   =>  'sample_'. $i+1 . '.jpg',
                'title'     =>  $article,
                'slug'      =>  Str::slug($article),
                'category'  =>  rand(1,10),
                'author'    =>  rand(1,5),
                'hit'       =>  rand(0,250),
                'keywords'  =>  $keywanddesc,
                'desc'      =>  $keywanddesc,
                'content'   =>  $content
            ]);

        }

    }
}
