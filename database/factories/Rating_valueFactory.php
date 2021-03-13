<?php

namespace Database\Factories;

use App\Models\Rating_value;
use Illuminate\Database\Eloquent\Factories\Factory;

class Rating_valueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating_value::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => rand(1, 5),
        ];
    }
}
