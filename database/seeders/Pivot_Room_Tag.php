<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Pivot_Room_Tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_tag')->insert([
            ["room_id" => 1,
            "tag_id" => 3,],
            ["room_id" => 1,
            "tag_id" => 7,],

            ["room_id" => 2,
            "tag_id" => 8,],

            ["room_id" => 3,
            "tag_id" => 1,],
            ["room_id" => 3,
            "tag_id" => 4,],

            ["room_id" => 4,
            "tag_id" => 4,],
            ["room_id" => 4,
            "tag_id" => 7,],

            ["room_id" => 5,
            "tag_id" => 2,],
            ["room_id" => 5,
            "tag_id" => 7,],

            ["room_id" => 6,
            "tag_id" => 1,],
            ["room_id" => 6,
            "tag_id" => 5,],

            ["room_id" => 7,
            "tag_id" => 6,],
            ["room_id" => 7,
            "tag_id" => 7,],
            ["room_id" => 7,
            "tag_id" => 8,],

            ["room_id" => 8,
            "tag_id" => 6,],
            ["room_id" => 8,
            "tag_id" => 7,],
            ["room_id" => 8,
            "tag_id" => 8,],

            ["room_id" => 9,
            "tag_id" => 7,],
        ]);
    }
}
