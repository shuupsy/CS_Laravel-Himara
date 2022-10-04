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
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));


        DB::table('dishes')->insert([
            [
                'title' => $faker->foodname(),
                'description' => $faker->realText($maxNbChars = 155, $indexSize = 2),
                'price' => $faker->numberBetween($min=5, $max=20),
                'photo' => $faker->imageUrl,
            ],
        ]);
    }
}
