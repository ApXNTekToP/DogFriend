<?php

namespace Database\Factories;

use App\Models\AdsPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdsPhoto>
 */
class AdsPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ads_id' => fake()->numberBetween(1, 52),
            'path' => 'img/image' . fake()->numberBetween(0, 10) . '.jpg'
        ];
    }
}
