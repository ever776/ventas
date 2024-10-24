<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(3,true),
            'descripcion' => $this->faker->sentence(),
            'precio_compra' => $this->faker->randomNumber(3,true),
            'precio_venta' => $this->faker->randomNumber(4,true),
            'stock' => $this->faker->randomNumber(3,true),
            'stock_minimo' => $this->faker->randomNumber(2,true),
            'codigo_barras' => $this->faker->ean13(),
            'fecha_vencimiento' => $this->faker->date('Y-m-d'),
            'category_id' => $this->faker->numberBetween(1,\App\Models\Category::count())
        ];
    }
}
