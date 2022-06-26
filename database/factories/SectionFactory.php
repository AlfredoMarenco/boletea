<?php

namespace Database\Factories;

use App\Models\Map;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_section' => $this->faker->word,
            'name_real' => $this->faker->word,
            'capacity' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->boolean,
            'cols' => $this->faker->numberBetween(1, 100),
            'rows' => $this->faker->numberBetween(1, 100),
            'map_id' => Map::all()->random()->id,
        ];
    }
}
