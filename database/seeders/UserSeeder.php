<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'first_name' => "Sylvaine",
                'last_name' => "Ruan",
                'email' => "random-life@live.fr",
                'password' => bcrypt('tatamimi'),
                'city' => "Brussels",
                'country' => "Belgium",
                'profile_pic' => "admin.jpg",
            ],
            [
                'role_id' => 2,
                'first_name' => "Enzo",
                'last_name' => "Grillo",
                'email' => "enzogrillo96@gmail.com",
                'password' => bcrypt('tatamimi'),
                'city' => "Pigna",
                'country' => "Italia",
                'profile_pic' => "user9.jpg",
            ],
            [
                'role_id' => 3,
                'first_name' => "Mounia",
                'last_name' => "Babyzou",
                'email' => "mouniatrash@gmail.com",
                'password' => bcrypt('tatamimi'),
                'city' => "Brussels",
                'country' => "Belgium",
                'profile_pic' => "user6.jpg",
            ],
            [
                'role_id' => 4,
                'first_name' => "Test Editor",
                'last_name' => "Editor",
                'email' => "sylvaine.ruan@gmail.com",
                'password' => bcrypt('tatamimi'),
                'city' => "Metz",
                'country' => "France",
                'profile_pic' => "user5.jpg",
            ],
        ]);
    }
}
