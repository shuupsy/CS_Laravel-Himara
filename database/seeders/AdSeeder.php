<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            ["background_img" => 'video.jpg',
            "video_link" => 'https://www.youtube.com/watch?v=BDDfopejpwk',
            'is_Main' => 1]
        ]);
    }
}
