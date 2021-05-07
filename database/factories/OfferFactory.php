<?php

namespace Database\Factories;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    protected $model = Offer::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'price' => $this->faker->randomElement(range(100, 5000, 100)) * 100,
            'quantity_in_hand' => $this->faker->numberBetween(0, 50),
            'published_at' => $this->faker->dateTimeBetween('-2 months'),
            'ends_at' => $this->faker->dateTimeBetween('-2 months', '+2 months'),
        ];
    }
}
