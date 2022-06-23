<?php

namespace Database\Factories;

use App\Models\Enclosure;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnclosureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enclosure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'state' => $this->faker->state,
            'maps_url' => $this->faker->url,
            'image_url' => 'https://boletea.com/img/imgeEdenMunoz.jpeg',

        ];
    }
}
