<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ispit>
 */
class IspitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv_predmeta'=>$this->faker->randomElement(['Matematika 1','SPA','Marketing','AROS','EPOS']),
            'katedra'=>$this->faker->randomElement(['ELAB','SILAB','IS']),
            'semestar'=>$this->faker->randomElement(['Zimski','Letnji']),
            'godina_studija'=>$this->faker->randomElement(['I','II','III','IV']),
            'espb'=>$this->faker->randomElement(['3','4','5','6']),
        ];
    }
}
