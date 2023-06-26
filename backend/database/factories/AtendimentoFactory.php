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


        //Ira Verificar o status, para preencher a data_agend e a data_fim de acordo com a regra
        $dataAgend = clone $dataInicial;
        $interAgend = $this->faker->numberBetween(1, 20);
        $dataAgend->add(new DateInterval("P{$interAgend}D"));

        $dataFim = clone $dataAgend;
        $interFim = $this->faker->numberBetween(1, 10);
        $dataFim->add(new DateInterval("P{$interFim}D")); 

        $status = rand(1, 4);

        switch($status){
            case 1:
                // AG aguardando a gendamento
                $DA= null;
                $DF = null;
                $descFim = null;
                break;
            case 2:
                // A agendada
                $DA = $dataAgend;
                $DF = null;
                $descFim = null;
                break;
            default:
                // C concluida
                // FS Fechada sem solução
                $DA = $dataAgend;
                $DF = $dataFim;
                $descFim = $this->faker->sentence;
                break;


        }

        if($status == 1){
            
            
        }else if($status == 2){
            
            
        }

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
            'status_atend' => $status,
            'desc_fim' => $descFim,
            'data_agend' => $DA,
            'data_fim' => $DF

        ];
    }
}
