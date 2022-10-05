<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_options')->insert([
            ['option' => 'double bed'],
            ['option' => 'free internet'],
            ['option' => 'free wifi'],
            ['option' => 'breakfast included'],
            ['option' => 'balcony'],
            ['option' => 'free newspaper'],
            ['option' => 'flat screen TV'],
            ['option' => 'full AC'],
            ['option' => 'beach view'],
            ['option' => 'room service'],
        ]);
    }
}
