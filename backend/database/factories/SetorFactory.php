<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setor>
 */
class SetorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        static $setors = ['Desenv Web', 'Financeiro', 'Suporte', 'Marketing'];
        static $count = 0;
        $name = $setors[$count];
        $count = ($count + 1) % count($setors);
        
        return [
            'nome' => $name,
            'desc' => $this->faker->sentence
        ];
    }
}
