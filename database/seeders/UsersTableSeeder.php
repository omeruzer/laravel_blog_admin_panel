<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 

        for($i=0;$i<20;$i++){
            User::create([
                'name'      =>  $faker->name(),
                'email'     =>  $faker->email(),
                'password'  =>  Hash::make($faker->sentence(3)),
                'manager'   =>  rand(0,1),
            ]);
        }

        User::create([
            'name'      =>  'Ömer Uzer',
            'email'     =>  'omeruzer@gmail.com',
            'password'  =>  Hash::make(123),
            'manager'   =>  1,
        ]);
    }
}
