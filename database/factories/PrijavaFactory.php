<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Ispit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prijava>
 */
class PrijavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'=> Student::factory(),
            'ispit_id'=> Ispit::factory(),
            'ispitni_rok'=> $this->faker->randomElement(['Januar','Februar','Jun','Jul','Septembar','Oktobar']),
            'datum_prijave'=> $this->faker->date()
        ];
    }
}
