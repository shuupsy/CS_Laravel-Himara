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
            ["room_id" => 1, "photo" => 'single1.jpg'],
            ["room_id" => 2, "photo" => 'double.jpg'],
            ["room_id" => 3, "photo" => 'deluxe.jpg'],
            ["room_id" => 4, "photo" => 'family.jpg'],
            ["room_id" => 5, "photo" => 'king.jpg'],
            ["room_id" => 6, "photo" => 'honeymoon.jp'],
            ["room_id" => 7, "photo" => 'view.jpg'],
            ["room_id" => 8, "photo" => 'luxury.jpg'],
            ["room_id" => 9, "photo" => 'small.jpg'],
        ]);
    }
}
