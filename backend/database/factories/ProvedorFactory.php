<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provedor>
 */
class ProvedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $provedors = ['Titania', 'Visão net', 'Providers', 'GGnet', 'VCtelecom', 'VoxxTelecom', 'TurboNet'];
        static $count = 0;
        $name = $provedors[$count];

        $count = ($count + 1) % count($provedors);
        return [
            //'name' => $this->faker->unique()->randomElement($type)
            'nome' => $name,
            'desc' => $this->faker->sentence
        ];
    }
}
