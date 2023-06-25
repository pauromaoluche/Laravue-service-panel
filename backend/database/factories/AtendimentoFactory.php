<?php

namespace Database\Factories;

use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atendimento>
 */
class AtendimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dataInicial = $this->faker->dateTimeBetween('-1 year', 'now');
        $intervaloDias = $this->faker->numberBetween(1, 30);
        $dataFinal = clone $dataInicial;
        $dataFinal->add(new DateInterval("P{$intervaloDias}D"));

        return [
            'gerado_por' => rand(1, 20),
            'provedor_id' => rand(1, 7),
            'service_type_id' => rand(1, 5),
            'prioridade' => rand(1, 3),
            'protocolo' => $this->faker->unique()->randomNumber(5),
            'created_at' => $dataInicial,
            'data_prev' => $dataFinal,
            'desc' => $this->faker->sentence,
            'user_id' => rand(1, 20),
            'setor_id' => rand(1, 4),
            'status_atend' => rand(1, 4)
        ];
    }
}
