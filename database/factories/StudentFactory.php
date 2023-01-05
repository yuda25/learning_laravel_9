<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name' => $faker->name(),
            'gender' => Arr::random(['L', 'P']),
            'nis' => random_int(0000001, 9999999),
            'class_id' => Arr::random(['1', '2', '3', '4']),
        ];
    }
}
