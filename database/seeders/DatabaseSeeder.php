<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\AdSeeder;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LogoSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\StaffMembers;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\RoomOptionSeeder;
use Database\Seeders\RoomCategorySeeder;
use Database\Seeders\GalleryCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdSeeder::class,
            GalleryCategorySeeder::class,
            HotelSeeder::class,
            LogoSeeder::class,
            StaffMembers::class,
            RoleSeeder::class,
            RoomCategorySeeder::class,
            RoomOptionSeeder::class,
            ServiceSeeder::class,
            SliderSeeder::class,
            TagSeeder::class,
        ]);
        \App\Models\Staff::factory(10)->create();
        \App\Models\Dish::factory(10)->create();
    }
}
