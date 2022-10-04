<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            ['option' => 'double bed'],
            ['option' => 'free wifi'],
            ['option' => 'free internet'],
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
