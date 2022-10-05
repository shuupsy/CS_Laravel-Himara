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
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 80,
                "nb_persons" => 3,
                "category_id" => 3,
                "rating" => 5,
            ],
            [
                "name" => 'Tanger',
                "price" => 129,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 4,
                "category_id" => 3,
                "rating" => 5,
            ],
            [
                "name" => 'Tokyo',
                "price" => 189,
                "description1" => '',
                "description2" => '',
                "surface" => 45,
                "nb_persons" => 2,
                "category_id" => 2,
                "rating" => 5,
            ],
            [
                "name" => 'Paris',
                "price" => 149,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 73,
                "nb_persons" => 4,
                "category_id" => 3,
                "rating" => 5,
            ],
            [
                "name" => 'Rio de Janeiro',
                "price" => 289,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 2,
                "category_id" => 4,
                "rating" => 5,
            ],
            [
                "name" => 'Sicilia',
                "price" => 169,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 55,
                "nb_persons" => 2,
                "category_id" => 3,
                "rating" => 5,
            ],
            [
                "name" => 'Moscou',
                "price" => 119,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 80,
                "nb_persons" => 4,
                "category_id" => 3,
                "rating" => 5,
            ],
            [
                "name" => 'London',
                "price" => 349,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 100,
                "nb_persons" => 4,
                "category_id" => 4,
                "rating" => 5,
            ],
            [
                "name" => 'Dubaî',
                "price" => 39,
                "description1" => 'BELLE CHAMBRE',
                "description2" => 'AH',
                "surface" => 120,
                "nb_persons" => 2,
                "category_id" => 1,
                "rating" => 5,
            ],
        ]);
    }
}
