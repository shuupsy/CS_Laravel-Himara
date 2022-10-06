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
            ["category_id" => 1, "photo" => 'images/gallery/gallery4.jpg'],
            ["category_id" => 1, "photo" => 'images/gallery/gallery6.jpg'],

            ["category_id" => 2, "photo" => 'images/gallery/gallery1.jpg'],

            ["category_id" => 4, "photo" => 'images/gallery/gallery2.jpg'],
            ["category_id" => 4, "photo" => 'images/gallery/gallery8.jpg'],
            ["category_id" => 4, "photo" => 'images/gallery/gallery10.jpg'],
        ]);
    }
}
