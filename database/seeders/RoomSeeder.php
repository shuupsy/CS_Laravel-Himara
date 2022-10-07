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
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 80,
                "nb_persons" => 3,
                "category_id" => 1,
                "rating" => 5,
                "is_Available" => true,
            ],
            [
                "name" => 'Tanger',
                "price" => 129,
                "mainphoto_path" => 'images/rooms/double/double.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 4,
                "category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Tokyo',
                "price" => 189,
                "mainphoto_path" => 'images/rooms/deluxe/deluxe.jpg',
                "description1" => '',
                "description2" => '',
                "surface" => 45,
                "nb_persons" => 2,
                "category_id" => 4,
                "rating" => 5,
                "is_Available" => true,
            ],
            [
                "name" => 'Paris',
                "price" => 149,
                "mainphoto_path" => 'images/rooms/family/family.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 73,
                "nb_persons" => 4,
                "category_id" => 3,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Rio de Janeiro',
                "price" => 289,
                "mainphoto_path" => 'images/rooms/king/king.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 2,
                "category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Sicilia',
                "price" => 169,
                "mainphoto_path" => 'images/rooms/honeymoon/honeymoon.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 55,
                "nb_persons" => 2,
                "category_id" => 2,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Moscou',
                "price" => 119,
                "mainphoto_path" => 'images/rooms/view/view.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 80,
                "nb_persons" => 4,
                "category_id" => 3,
                "rating" => 3,
                "is_Available" => true,
            ],
            [
                "name" => 'London',
                "price" => 349,
                "mainphoto_path" => 'images/rooms/luxury/luxury.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 4,
                "category_id" => 4,
                "rating" => 4,
                "is_Available" => true,
            ],
            [
                "name" => 'Dubaî',
                "price" => 39,
                "mainphoto_path" => 'images/rooms/small/small.jpg',
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 120,
                "nb_persons" => 2,
                "category_id" => 1,
                "rating" => 3,
                "is_Available" => true,
            ],
        ]);
    }
}
