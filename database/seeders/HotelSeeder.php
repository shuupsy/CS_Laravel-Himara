<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
           /*  ['name' => 'Himara',
            'address' => 'Place de la Minoterie 10, 1080 Molengeek-Saint-Jean',
            'phone' => '+1 888 123 4567',
            'email' => 'contact@hotelhimara.com',
            'fax' => '+1 888 123 4567',
            'url' => 'www.hotelhimara.com',
            'logo' => 'tata@gmail.com',
            ], */
            ['name' => 'Sysy',
            'address' => 'Place de la Minoterie 10, 1080 Bruxelles',
            'phone' => '+32 456 36 34 89',
            'email' => 'contact@sysy.com',
            'fax' => '+1 888 123 4567',
            'url' => 'www.hotelsysy.com',
            'logo' => 'images/logo.svg',
            'big_logo' => 'images/logo-big-transparent.svg',
            ],
        ]);
    }
}
