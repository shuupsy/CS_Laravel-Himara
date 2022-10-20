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
            'user_id' => null,
            'room_id' => 1,
            'rating' => 2,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 1,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 4,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 1,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus."
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 3,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus."
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 5,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus."
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 5,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 3,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
          [
            'user_id' => null,
            'room_id' => null,
            'rating' => 4,
            'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.",
          ],
        ]);
    }
}
