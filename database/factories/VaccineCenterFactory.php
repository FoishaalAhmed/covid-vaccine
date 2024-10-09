<?php

namespace Database\Factories;

use App\Models\VaccineCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VaccineCenter>
 */
class VaccineCenterFactory extends Factory
{
    protected $model = VaccineCenter::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'visitor_limit' => $this->faker->numberBetween(50, 100),
        ];
    }
}
