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
            ]
        ]);
    }
}
