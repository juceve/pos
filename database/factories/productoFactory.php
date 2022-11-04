<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class productoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->word(),
            'nombre' => $this->faker->word(),
            'precioVenta' => $this->faker->numerify('###'),
            'minimoStock' => $this->faker->numerify('###'),
            'activo' => true,
            'categoriaProducto_id' => $this->faker->randomElement(['1','2','3','4','5']),
            'proveedore_id' => $this->faker->randomElement(['1','2']),
        ];
    }
}
