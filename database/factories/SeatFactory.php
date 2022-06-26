<?php

namespace Database\Factories;

use App\Models\PriceCategory;
use App\Models\Seat;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prefix' => $this->faker->word,
            'number' => $this->faker->numberBetween(1, 100),
            'section_id' => Section::all()->random()->id,
            'price_category_id' => PriceCategory::all()->random()->id,
        ];
    }
}
