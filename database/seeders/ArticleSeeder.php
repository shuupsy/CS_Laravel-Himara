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
                'user_id' => 1,
                'title' => '10 tips for holiday travel',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'blog-post1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'title' => 'Enjoy your holidays',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'blog-post2.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'title' => 'Honeymoon at Hotel',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'image' => 'blog-post3.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
