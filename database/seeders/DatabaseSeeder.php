<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use Database\Seeders\AdSeeder;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LogoSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\StaffMembers;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\Pivot_Room_Tag;
use Database\Seeders\RoomPhotoSeeder;
use Database\Seeders\RoomOptionSeeder;
use Database\Seeders\Pivot_Option_Room;
use Database\Seeders\GalleryPhotoSeeder;
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
            GalleryPhotoSeeder::class,
            HotelSeeder::class,
            LogoSeeder::class,
            StaffMembers::class,
            RoleSeeder::class,
            RoomCategorySeeder::class,
            RoomSeeder::class,
            RoomOptionSeeder::class,
            RoomPhotoSeeder::class,
            ServiceSeeder::class,
            SliderSeeder::class,
            TagSeeder::class,
            Pivot_Room_Tag::class,
            Pivot_Option_Room::class,
        ]);
        \App\Models\Staff::factory(10)->create();
        \App\Models\Dish::factory(10)->create();
    }
}
