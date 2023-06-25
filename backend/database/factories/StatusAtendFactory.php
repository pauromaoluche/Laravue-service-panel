<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StatusAtend>
 */
class StatusAtendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $statuss = ['AG', 'A', 'C', 'FS'];
        static $descri = ['Aguardando agendamento', 'Agendada', 'Concluida', 'Fechada sem solução'];
        static $count = 0;

        if ($count < 4) {
            $status = $statuss[$count];
            $desc = $descri[$count];
        }

        $count++;
        return [
            'status_atend' => $status,
            'descri_status' => $desc
        ];
    }
}
