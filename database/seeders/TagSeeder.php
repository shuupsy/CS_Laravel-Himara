<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['tag' => 'red'],
            ['tag' => 'dark'],
            ['tag' => 'yellow'],
            ['tag' => 'blue'],
            ['tag' => 'pink'],
            ['tag' => 'green'],
            ['tag' => 'gray'],
            ['tag' => 'brown'],
        ]);
    }
}
