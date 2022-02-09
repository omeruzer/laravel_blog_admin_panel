<?php

namespace Database\Seeders;

use App\Models\SocaialMedia;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocaialMedia::create([
            'facebook'  =>  'https://www.facebook.com/',
            'twitter'   =>  'https://twitter.com/',
            'instagram' =>  'https://www.instagram.com/'
        ]);
    }
}
