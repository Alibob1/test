<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++ )
            DB::table('transportation')->insert([
                'station_a' => Str::random(10),
                'station_b' => Str::random(10),
                'weight' => rand(1, 10),
            ]);
    }
}
