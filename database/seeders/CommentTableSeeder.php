<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
            Comment::create([
                'article'   =>  rand(1,24),
                'name'      =>  $faker->name(),
                'comment'   =>  $faker->sentence(8),
            ]);
        }

    }
}
