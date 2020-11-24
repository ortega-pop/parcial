<?php

namespace Database\Factories;

use App\Models\Ventas;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ventas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                     
            'nombreProducto' => $this->faker->name,
            'codProducto' => rand(10, 99),
            'fechaCompra' => $this->faker->datetime,
            'credito' => $this->faker->boolean,
            'valorCompra' => rand(5.500, 5000000),
            'descripcionProducto' => $this->faker->text

        ];
    }
}
