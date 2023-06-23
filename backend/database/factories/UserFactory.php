<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        static $users = ['Desenv Web', 'Financeiro', 'Suporte', 'Marketing'];
        static $emails = ['desenvweb@hotmail.com', 'financeiro@hotmail.com', 'suporte@hotmail.com', 'marketing@hotmail.com'];
        static $count = 0;
        static $countSetor = 1;
        if ($count < 4) {
            $name = $users[$count];
            $email = $emails[$count];
            $setorid = $countSetor;
        } else {
            $name = $this->faker->name();
            $email = $this->faker->unique()->safeEmail();
            $setorid = rand(1, 4);
        }

        $countSetor++;
        $count++;

        return [
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'setor_id' => $setorid
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
