<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalleryPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_photos')->insert([
            ["gallery_category_id" => 1,
            "title" => 'Breakfast',
            "photo" => 'gallery4.jpg'],

            ["gallery_category_id" => 1,
            "title" => 'Restaurant',
            "photo" => 'gallery6.jpg'],

            ["gallery_category_id" => 2,
            "title" => 'Swimming Pool',
            "photo" => 'gallery1.jpg'],

            ["gallery_category_id" => 4,
            "title" => 'Room View',
            "photo" => 'gallery2.jpg'],

            ["gallery_category_id" => 4,
            "title" => 'Beach',
            "photo" => 'gallery8.jpg'],

            ["gallery_category_id" => 4,
            "title" => 'Sea',
            "photo" => 'gallery10.jpg'],

            ["gallery_category_id" => null,
            "title" => 'Cocktail',
            "photo" => 'gallery3.jpg'],

            ["gallery_category_id" => null,
            "title" => 'Playground',
            "photo" => 'gallery5.jpg'],

            ["gallery_category_id" => null,
            "title" => 'Wedding Ceremony',
            "photo" => 'gallery7.jpg'],

            ["gallery_category_id" => null,
            "title" => 'Honeymoon Room',
            "photo" => 'gallery9.jpg'],
        ]);
    }
}
