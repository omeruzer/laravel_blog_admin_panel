<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(AuthorTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ContactTableSeeder::class);

    }
}
