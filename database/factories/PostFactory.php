<?php

namespace Database\Factories;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->e164PhoneNumber(),
            'nom' => $this->faker->lastName(),
            'produit' => $this->faker->company(),
            'lieux' => $this->faker->city(),
            'date' => $this->faker->date(),
            'quantité' => $this->faker->randomDigit(),
        ];
    }
}
