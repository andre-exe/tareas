<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    protected $model = Tarea::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $estados = ['pendiente', 'en_progreso', 'completada'];

        return [
            'titulo' => $this->faker->sentence(4),
            'descripcion' => $this->faker->optional()->paragraph(),
            'estado' => $this->faker->randomElement($estados),
            'fecha_limite' => $this->faker->optional()->dateTimeBetween('now', '+2 months')->format('Y-m-d'),
        ];
    }
}
