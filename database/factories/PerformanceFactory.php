<?php

namespace Database\Factories;

use App\Models\Enclosure;
use App\Models\Event;
use App\Models\Performance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PerformanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Performance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'date_start' => $this->faker->dateTimeBetween('now', '+1 year'),
            'date_end' => $this->faker->dateTimeBetween('now', '+1 year'),
            'time_start' => $this->faker->time(),
            'time_end' => $this->faker->time(),
            'status' => rand(0,1),
            'description' => $this->faker->text(),
            'image_url' => 'https://boletea.com/img/imgeEdenMunoz.jpeg',
            'enclosure_id' => Enclosure::all()->random()->id,
            'event_id' => Event::all()->random()->id,
        ];
    }
}
