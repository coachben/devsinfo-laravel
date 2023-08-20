<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => Str::random(10),
            'email' => fake()->unique()->safeEmail(),
            'status' => 'true',
            'address'=> Str::random(12),
            'website'=> Str::random(10) + '.com',
            //
        ];



    }
}

/**This runs for us some random number of fake entries */
