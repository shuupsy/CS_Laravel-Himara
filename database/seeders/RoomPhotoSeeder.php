<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_photos')->insert([
            ["room_id" => 1, "photo_path" => 'single/single1.jpg'],
            ["room_id" => 2, "photo_path" => 'double/double.jpg'],
            ["room_id" => 3, "photo_path" => 'deluxe/deluxe.jpg'],
            ["room_id" => 4, "photo_path" => 'family/family.jpg'],
            ["room_id" => 5, "photo_path" => 'king/king.jpg'],
            ["room_id" => 6, "photo_path" => 'honeymoon/honeymoon.jp'],
            ["room_id" => 7, "photo_path" => 'view/view.jpg'],
            ["room_id" => 8, "photo_path" => 'luxury/luxury.jpg'],
            ["room_id" => 9, "photo_path" => 'small/small.jpg'],
        ]);
    }
}
