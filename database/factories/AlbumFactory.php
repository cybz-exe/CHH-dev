<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Album::class;

    public function definition(): array
    {
        $relationships = ['parent', 'child', 'spouse', 'sibling', 'cousin', 'grandparent', 'grandchild', 'uncle', 'aunt'];
        
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            //'contact' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'status' => $this->faker->randomElement(['Active', 'Pending', 'Inactive']),
            'age' => $this->faker->numberBetween(18, 80),
            'dob' => $this->faker->date,
            'sex' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->randomElement(['Negros Occidental', 'Negros Oriental']),
            //'fee',
            'emergency_name' => $this->faker->firstName,
            //'emergency_contact' => $this->faker->phoneNumber,
            'relationship' => $this->faker->randomElement($relationships),
            'image' => $this->faker->imageUrl($width = 300, $height = 300)
        ];
    }
}
