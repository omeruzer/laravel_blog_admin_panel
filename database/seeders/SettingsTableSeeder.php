<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'logo'      =>  'logo.png',
            'favicon'   =>  'favicon.png',
            'title'     =>  'BlogSitesi.com',
            'desc'      =>  'Blog Yazılarının Paylaşıldığı Yer',
            'keywords'  =>  'Blog,Teknoloji,Hayat,Yaşam',
            'author'    =>  'Ömer Uzer',
        ]);
    }
}
