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
            ["room_id" => 1, "photo_path" => 'images/rooms/single/single1.jpg'],
            ["room_id" => 2, "photo_path" => 'images/rooms/double/double.jpg'],
            ["room_id" => 3, "photo_path" => 'images/rooms/deluxe/deluxe.jpg'],
            ["room_id" => 4, "photo_path" => 'images/rooms/family/family.jpg'],
            ["room_id" => 5, "photo_path" => 'images/rooms/king/king.jpg'],
            ["room_id" => 6, "photo_path" => 'images/rooms/honeymoon/honeymoon.jp'],
            ["room_id" => 7, "photo_path" => 'images/rooms/view/view.jpg'],
            ["room_id" => 8, "photo_path" => 'images/rooms/luxury/luxury.jpg'],
            ["room_id" => 9, "photo_path" => 'images/rooms/small/small.jpg'],
        ]);
    }
}
