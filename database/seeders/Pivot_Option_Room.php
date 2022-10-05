<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Pivot_Option_Room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_room')->insert([
            /* Room 1 */
            ["room_id" => 1, "option_id" => 1],
            ["room_id" => 1, "option_id" => 2],
            ["room_id" => 1, "option_id" => 3],
            ["room_id" => 1, "option_id" => 4],
            ["room_id" => 1, "option_id" => 5],
            ["room_id" => 1, "option_id" => 8],
            ["room_id" => 1, "option_id" => 10],
            /* Room 2 */
            ["room_id" => 2, "option_id" => 1],
            ["room_id" => 2, "option_id" => 2],
            ["room_id" => 2, "option_id" => 3],
            ["room_id" => 2, "option_id" => 4],
            ["room_id" => 2, "option_id" => 5],
            ["room_id" => 2, "option_id" => 8],
            ["room_id" => 2, "option_id" => 10],
            /* Room 3 */
            ["room_id" => 3, "option_id" => 1],
            ["room_id" => 3, "option_id" => 2],
            ["room_id" => 3, "option_id" => 3],
            ["room_id" => 3, "option_id" => 4],
            ["room_id" => 3, "option_id" => 5],
            ["room_id" => 3, "option_id" => 8],
            /* Room 4 */
            ["room_id" => 4, "option_id" => 1],
            ["room_id" => 4, "option_id" => 2],
            ["room_id" => 4, "option_id" => 3],
            ["room_id" => 4, "option_id" => 5],
            ["room_id" => 4, "option_id" => 7],
            /* Room 5 */
            ["room_id" => 5, "option_id" => 1],
            ["room_id" => 5, "option_id" => 2],
            ["room_id" => 5, "option_id" => 3],
            ["room_id" => 5, "option_id" => 4],
            ["room_id" => 5, "option_id" => 5],
            ["room_id" => 5, "option_id" => 7],
            ["room_id" => 5, "option_id" => 8],
            ["room_id" => 5, "option_id" => 9],
            ["room_id" => 5, "option_id" => 10],
            /* Room 6 */
            ["room_id" => 6, "option_id" => 1],
            ["room_id" => 6, "option_id" => 2],
            ["room_id" => 6, "option_id" => 3],
            ["room_id" => 6, "option_id" => 4],
            ["room_id" => 6, "option_id" => 5],
            ["room_id" => 6, "option_id" => 9],
            ["room_id" => 6, "option_id" => 10],
            /* Room 7 */
            ["room_id" => 7, "option_id" => 1],
            ["room_id" => 7, "option_id" => 2],
            ["room_id" => 7, "option_id" => 3],
            ["room_id" => 7, "option_id" => 7],
            /* Room 8 */
            ["room_id" => 8, "option_id" => 1],
            ["room_id" => 8, "option_id" => 2],
            ["room_id" => 8, "option_id" => 3],
            ["room_id" => 8, "option_id" => 4],
            ["room_id" => 8, "option_id" => 5],
            ["room_id" => 8, "option_id" => 6],
            ["room_id" => 8, "option_id" => 7],
            ["room_id" => 8, "option_id" => 9],
            ["room_id" => 8, "option_id" => 10],
            /* Room 9 */
            ["room_id" => 9, "option_id" => 1],
            ["room_id" => 9, "option_id" => 2],
            ["room_id" => 9, "option_id" => 3],
            ["room_id" => 9, "option_id" => 4],
            ["room_id" => 9, "option_id" => 5],
            ["room_id" => 9, "option_id" => 6],
            ["room_id" => 9, "option_id" => 7],
            ["room_id" => 9, "option_id" => 8],
            ["room_id" => 9, "option_id" => 9],
            ["room_id" => 9, "option_id" => 10],
        ]);
    }
}
