<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Enclosure;
use App\Models\Event;
use App\Models\Performance;
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
        /* $this->call(EventSeeder::class); */
       /*  Storage::deleteDirectory('events');
        Storage::deleteDirectory('performances');
        Storage::deleteDirectory('enclosures');
        Storage::makeDirectory('events');
        Storage::makeDirectory('performances');
        Storage::makeDirectory('enclosures'); */
        Category::factory(10)->create();
        Enclosure::factory(15)->create();
        $this->call(EventSeeder::class);
        Performance::factory(50)->create();
        $this->call(UserSeeder::class);
    }
}
