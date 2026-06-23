<?php

namespace Database\Factories;

use App\Models\Entrada;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Entrada>
 */
class EntradaFactory extends Factory
{
    protected $model = Entrada::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'titulo' => $this->faker->lexify(str_repeat('?', 50)),  // Genera un título con 50 caracteres aleatorios
            'tag' => $this->faker->word,  // Generar una sola palabra para el tag
            'imagen' => $this->faker->word, // Generar una sola palabra para la imagen
            'contenido' => $this->faker->paragraph,  // Generar un párrafo de contenido
            'user_id' => User::inRandomOrder()->first()->id,    // Obtener un user_id aleatorio de la tabla User

        ];
    }
}
