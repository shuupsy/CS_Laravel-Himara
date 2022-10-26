<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            ['room_id' => 1, 'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 2, 'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 3, 'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 4, 'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 5, 'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 6, 'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 7, 'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 8, 'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            ],
            ['room_id' => 9, 'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}
