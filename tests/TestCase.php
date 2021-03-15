<?php

namespace Tests;

use App\Models\Company;
use App\Models\Rating_value;
use Faker\Factory;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $faker;
    protected static $user = null;

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();

        $superUser = User::factory()->state([
            'isAdmin' => 1,
        ])->make();
        static::$user = $superUser;
    }

    protected function createCompany($number = null)
    {

        $company = Company::factory($number)->create();

        return $company;
    }

    protected function companyData()
    {
        return [
            'name' => $this->faker->company,
            'website' => $this->faker->domainName,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
    protected function ratingValueData()
    {
        return [
            'value' => rand(1, 20),
            'title' => $this->faker->name,
        ];
    }

    protected function createRatingValue($number = null)
    {

        $rating_value = Rating_value::factory($number)->create();

        return $rating_value;
    }
}
