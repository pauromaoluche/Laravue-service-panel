<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceType>
 */
class ServiceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $type = ['(Suporte) Orçamento', 'Criar Tarefa', 'Melhoria', 'Correção', 'Configuração'];
        static $count = 0;
        $name = $type[$count];

        $count = ($count + 1) % count($type);
        return [
            //'name' => $this->faker->unique()->randomElement($type)
            'name' => $name
        ];
    }
}
