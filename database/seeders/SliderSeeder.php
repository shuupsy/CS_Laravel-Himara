<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            ["layer1" => 'TOUCH THE DREAM',
            "layer2" => 'Live Your Myth In Hotel',
            "layer3" => '',
            "layer4" => '',
            "layer5" => '',
            "layer6" => 'Star Luxury Hotel',
            "background_img" => 'images/slider/slider1.jpg',
            "order" => 1
            ],

            ["layer1" => 'WHERE DREAMS COME TRUE',
            "layer2" => "You'll Never Forget Your Stay",
            "layer3" => null,
            "layer4" => null,
            "layer5" => null,
            "layer6" => null,
            "background_img" => 'images/slider/slider3.jpg',
            "order" => 2
            ],

            ["layer1" => 'ENJOY YOUR HOLIDAYS',
            "layer2" => 'Family Room from €89 per night',
            "layer3" => null,
            "layer4" => null,
            "layer5" => null,
            "layer6" => null,
            "background_img" =>  'images/slider/slider13.jpg',
            "order" => 3
            ],


        ]);
    }
}
