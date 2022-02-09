<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 

        for($i=0;$i<10;$i++){

            $category = $faker->sentence(2);

            Category::create([
                'title'     =>  $category,
                'slug'      =>  Str::slug($category),
                'content'   =>  $faker->sentence(5),
            ]);
        }
    }
}
