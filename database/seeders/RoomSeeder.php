<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                "name" => 'Istanbul',
                "price" => 89,
                "photo" => 'single1.jpg',
                "surface" => 80,
                "nb_persons" => 3,
                "room_category_id" => 1,
                "rating" => 5,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
            [
                "name" => 'Tanger',
                "price" => 129,
                "photo" => 'double.jpg',
                "surface" => 100,
                "nb_persons" => 4,
                "room_category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
                "in_Sale" => true,
                "is_Published" => true,
            ],
            [
                "name" => 'Tokyo',
                "price" => 189,
                "photo" => 'deluxe.jpg',
                "surface" => 45,
                "nb_persons" => 2,
                "room_category_id" => 4,
                "rating" => 5,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
            [
                "name" => 'Paris',
                "price" => 149,
                "photo" => 'family.jpg',
                "surface" => 73,
                "nb_persons" => 4,
                "room_category_id" => 3,
                "rating" => 4,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
            [
                "name" => 'Rio de Janeiro',
                "price" => 289,
                "photo" => 'king.jpg',
                "surface" => 100,
                "nb_persons" => 2,
                "room_category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
                "in_Sale" => true,
                "is_Published" => true,
            ],
            [
                "name" => 'Sicilia',
                "price" => 169,
                "photo" => 'honeymoon.jpg',
                "surface" => 55,
                "nb_persons" => 2,
                "room_category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
            [
                "name" => 'Moscou',
                "price" => 119,
                "photo" => 'view.jpg',
                "surface" => 80,
                "nb_persons" => 4,
                "room_category_id" => 3,
                "rating" => 3,
                "is_Available" => true,
                "in_Sale" => true,
                "is_Published" => true,
            ],
            [
                "name" => 'London',
                "price" => 349,
                "photo" => 'luxury.jpg',
                "surface" => 100,
                "nb_persons" => 4,
                "room_category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
            [
                "name" => 'Dubaî',
                "price" => 39,
                "photo" => 'small.jpg',
                "surface" => 120,
                "nb_persons" => 2,
                "room_category_id" => 1,
                "rating" => 3,
                "is_Available" => true,
                "in_Sale" => false,
                "is_Published" => true,
            ],
        ]);
    }
}
