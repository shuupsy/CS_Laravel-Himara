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
            ['option_name' => 'double bed'],
            ['option_name' => 'free internet'],
            ['option_name' => 'free wifi'],
            ['option_name' => 'breakfast included'],
            ['option_name' => 'balcony'],
            ['option_name' => 'free newspaper'],
            ['option_name' => 'flat screen TV'],
            ['option_name' => 'full AC'],
            ['option_name' => 'beach view'],
            ['option_name' => 'room service'],
        ]);
    }
}
