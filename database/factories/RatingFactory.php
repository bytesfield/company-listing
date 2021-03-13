<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use App\Models\Rating;
use App\Models\Rating_value;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'ratingable_id' => Company::factory()->create()->id,
            'ratingable_type' => 'App\Models\Company',
            'rating_value_id' => Rating_value::factory()->create()->id,

        ];
    }
}
