<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
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
            Message::create([
                'name'      =>  $faker->name(),
                'read'      =>  0,
                'email'     =>  $faker->email(),
                'subject'   =>  $faker->sentence(2),
                'content'   =>  $faker->sentence(20)
            ]);
        }
    }
}
