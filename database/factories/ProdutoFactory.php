<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "thumburl" => "#",
            "is_completo" => $this->faker->boolean(),
            "description" => $this->faker->text(100),
            "body" => $this->faker->text(),
            "start_date" => $this->faker->date(),
            "techs" => "Algumas Tecnologias",
        ];
    }
}
