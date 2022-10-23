<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_reviews')->insert([
          [
            'booking_id' => 1,
            'rating' => 2,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 2,
            'rating' => 1,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 3,
            'rating' => 4,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 4,
            'rating' => 1,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 5,
            'rating' => 3,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 6,
            'rating' => 5,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 7,
            'rating' => 5,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 8,
            'rating' => 3,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
          [
            'booking_id' => 9,
            'rating' => 4,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
            'is_Active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
          ],
        ]);
    }
}
