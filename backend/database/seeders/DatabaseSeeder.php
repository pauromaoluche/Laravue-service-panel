<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ServiceType::factory(5)->create();
        \App\Models\Setor::factory(4)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Provedor::factory(7)->create();
        \App\Models\Atendimento::factory(50)->create();
         
    }
}
