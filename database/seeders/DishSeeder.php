<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            [
                'title' => 'Salat',
                'description' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...',
                'price' => 16.99,
                'photo' => 'images/restaurant/restaurant1.jpg',
            ],

            [
                'title' => 'Croquettes',
                'description' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...',
                'price' => 9.99,
                'photo' => 'images/restaurant/restaurant2.jpg',
            ]
        ]);
    }
}
