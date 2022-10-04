<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LogoSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\StaffMembers;
use Database\Seeders\ServiceSeeder;

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
            HotelSeeder::class,
            StaffMembers::class,
            RoleSeeder::class,
            LogoSeeder::class,
            ServiceSeeder::class,
            TagSeeder::class,
        ]);
        \App\Models\Staff::factory(10)->create();
        \App\Models\Dish::factory(10)->create();
    }
}
