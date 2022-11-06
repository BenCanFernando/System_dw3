<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text,
        'apellido' => $this->faker->text,
        'edad' => $this->faker->word,
        'ci' => $this->faker->word,
        'telefono' => $this->faker->text,
        'direccion' => $this->faker->text,
        'email' => $this->faker->text,
        'profesion' => $this->faker->text,
        'genero' => $this->faker->word,
        'fechanac' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
