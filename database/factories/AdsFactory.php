<?php

namespace Database\Factories;

use App\Models\Ads;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;

/**
 * @extends Factory<Ads>
 */
class AdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[NoReturn] public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(0,1000000),
        ];
    }
}
