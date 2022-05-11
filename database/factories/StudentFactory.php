<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $godina = $this->faker->randomElement(['2018','2019','2020','2021']);
        $indeks =$godina . '/' . $this->faker->unique()->regexify('[0-9][0-9][0-9][0-9]');
        return [
            'broj_indeksa'=>$indeks,
            'ime_prezime'=>$this->faker->firstName() . ' ' . $this->faker->lastName(),
            'datum_rodjenja'=>$this->faker->date(),
            'studentski_emial'=>$this->faker->email(),
            'mesto_stanovanja'=>$this->faker->city(),

        ];
    }
}
