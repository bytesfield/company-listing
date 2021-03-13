<?php

namespace Database\Seeders;

use App\Models\Rating_value;
use Illuminate\Database\Seeder;

class Rating_valueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating_value::factory()
            ->count(2)
            ->create();
    }
}
