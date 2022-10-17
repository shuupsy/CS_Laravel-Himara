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
                "mainphoto_path" => 'images/rooms/single/single1.jpg',
                "surface" => 80,
                "nb_persons" => 3,
                "room_category_id" => 1,
                "rating" => 5,
                "is_Available" => true,
            ],
            [
                "name" => 'Tanger',
                "price" => 129,
                "mainphoto_path" => 'images/rooms/double/double.jpg',
                "surface" => 100,
                "nb_persons" => 4,
                "room_category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Tokyo',
                "price" => 189,
                "mainphoto_path" => 'images/rooms/deluxe/deluxe.jpg',
                "surface" => 45,
                "nb_persons" => 2,
                "room_category_id" => 4,
                "rating" => 5,
                "is_Available" => true,
            ],
            [
                "name" => 'Paris',
                "price" => 149,
                "mainphoto_path" => 'images/rooms/family/family.jpg',
                "surface" => 73,
                "nb_persons" => 4,
                "room_category_id" => 3,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Rio de Janeiro',
                "price" => 289,
                "mainphoto_path" => 'images/rooms/king/king.jpg',
                "surface" => 100,
                "nb_persons" => 2,
                "room_category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Sicilia',
                "price" => 169,
                "mainphoto_path" => 'images/rooms/honeymoon/honeymoon.jpg',
                "surface" => 55,
                "nb_persons" => 2,
                "room_category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Moscou',
                "price" => 119,
                "mainphoto_path" => 'images/rooms/view/view.jpg',
                "surface" => 80,
                "nb_persons" => 4,
                "room_category_id" => 3,
                "rating" => 3,
                "is_Available" => true,
            ],
            [
                "name" => 'London',
                "price" => 349,
                "mainphoto_path" => 'images/rooms/luxury/luxury.jpg',
                "surface" => 100,
                "nb_persons" => 4,
                "room_category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Dubaî',
                "price" => 39,
                "mainphoto_path" => 'images/rooms/small/small.jpg',
                "surface" => 120,
                "nb_persons" => 2,
                "room_category_id" => 1,
                "rating" => 3,
                "is_Available" => true,
            ],
        ]);
    }
}
