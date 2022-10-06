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
            ["category_id" => 1,
            "title" => 'Breakfast',
            "photo" => 'images/gallery/gallery4.jpg'],

            ["category_id" => 1,
            "title" => 'Restaurant',
            "photo" => 'images/gallery/gallery6.jpg'],

            ["category_id" => 2,
            "title" => 'Swimming Pool',
            "photo" => 'images/gallery/gallery1.jpg'],

            ["category_id" => 4,
            "title" => 'Room View',
            "photo" => 'images/gallery/gallery2.jpg'],

            ["category_id" => 4,
            "title" => 'Beach',
            "photo" => 'images/gallery/gallery8.jpg'],

            ["category_id" => 4,
            "title" => 'Sea',
            "photo" => 'images/gallery/gallery10.jpg'],

            ["category_id" => null,
            "title" => 'Cocktail',
            "photo" => 'images/gallery/gallery3.jpg'],

            ["category_id" => null,
            "title" => 'Playground',
            "photo" => 'images/gallery/gallery5.jpg'],

            ["category_id" => null,
            "title" => 'Wedding Ceremony',
            "photo" => 'images/gallery/gallery7.jpg'],

            ["category_id" => null,
            "title" => 'Honeymoon Room',
            "photo" => 'images/gallery/gallery9.jpg'],
        ]);
    }
}
