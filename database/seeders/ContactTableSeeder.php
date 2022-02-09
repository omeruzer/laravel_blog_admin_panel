<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create(); 

        Contact::create([
            'phone'     =>  $faker->phoneNumber(),
            'email'     =>  $faker->email(),
            'address'   =>  $faker->address(),
        ]);
    }
}
