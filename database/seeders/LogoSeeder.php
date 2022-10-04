<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            ['logo' => 'flaticon-full-screen'],
            ['logo' => 'flaticon-search'],
            ['logo' => 'flaticon-link'],
            ['logo' => 'flaticon-add'],
            ['logo' => 'flaticon-tray-1'],
            ['logo' => 'flaticon-screen-1'],
            ['logo' => 'flaticon-nature'],
            ['logo' => 'flaticon-slider'],
            ['logo' => 'flaticon-tray'],
            ['logo' => 'flaticon-hotel'],
            ['logo' => 'flaticon-sports'],
            ['logo' => 'flaticon-bell-boy'],
            ['logo' => 'flaticon-screen'],
            ['logo' => 'flaticon-information-button'],
/*             ['logo' => 'Tata'],
            ['logo' => 'Tata'],
            ['logo' => 'Tata'],
            ['logo' => 'Tata'],
            ['logo' => 'Tata'],
            ['logo' => 'Tata'], */


        ]);
    }
}
