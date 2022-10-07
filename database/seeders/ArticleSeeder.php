<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'user_id' => null,
                'title' => '10 tips for holiday travel',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'images/blog/blog-post1.jpg',
            ],
            [
                'user_id' => null,
                'title' => 'Enjoy your holidays',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'images/blog/blog-post2.jpg',
            ],
            [
                'user_id' => null,
                'title' => 'Honeymoon at Hotel',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'images/blog/blog-post3.jpg',
            ],
        ]);
    }
}
