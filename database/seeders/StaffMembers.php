<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffMembers extends Seeder
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
    [
        'first_name' => Faker::create()->firstName,
        'last_name' => Faker::create()->lastName,
        'job' => Faker::create()->jobTitle,
        'description' => Faker::create()->text($maxNbChars = 155, $indexSize = 2),
        'photo' => Faker::create()->imageUrl,
    ],
]);
    }
}
