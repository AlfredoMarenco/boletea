<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Enclosure;
use App\Models\Event;
use App\Models\Map;
use App\Models\Performance;
use App\Models\PriceCategory;
use App\Models\Seat;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('events');
        Storage::deleteDirectory('performances');
        Storage::deleteDirectory('enclosures');
        Storage::makeDirectory('events');
        Storage::makeDirectory('performances');
        Storage::makeDirectory('enclosures');
        Category::factory(10)->create();
        $this->call(CitySeeder::class);
        $this->call(PointSeeder::class);
        Enclosure::factory(15)->create();
        Map::factory(30)->create();
        Section::factory(30)->create();
        PriceCategory::factory(30)->create();
        Seat::factory(5000)->create();
        $this->call(EventSeeder::class);
        Performance::factory(50)->create();
        $this->call(UserSeeder::class);
    }
}
