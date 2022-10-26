<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffBoss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

DB::table('staff')->insert([
    [
        'first_name' => 'Sylvaine',
        'last_name' => 'Ruan',
        'job' => 'CEO',
        'description' => 'Make it sexy.',
        'photo' => Faker::create()->imageUrl,
    ],
]);
    }
}
