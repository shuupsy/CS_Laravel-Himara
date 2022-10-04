<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['title' => 'Restaurant',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'logo_id' => 5,
            'image' => 'images/services/restaurant.jpg'],

            ['title' => 'Spa - Beauty &amp; Health',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'logo_id' => 7,
            'image' => 'images/services/spa.jpg'],

            ['title' => 'Conference Room',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'logo_id' => 6,
            'image' => 'images/services/conference.jpg'],

            ['title' => 'Swimming Pool',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'logo_id' => 11,
            'image' => 'images/services/swimming.jpg'],
        ]);
    }
}
