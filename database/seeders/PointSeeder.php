<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Point;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Point::factory(10)->create();

        $points = Point::all();
        foreach ($points as $point) {
            $point->cities()->attach(City::all()->random(rand(1, 5)));
        }
    }
}
