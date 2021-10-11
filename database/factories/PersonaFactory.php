<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             //Definir todos los campos que tiene mi tabla 
             'apellido_paterno' => $this->faker->sentence(5), //esto hara que este campo se llene con una oracion
             'apellido_materno' => $this->faker->sentence(5),
             'nombre' => $this->faker->sentence(5),
             'sexo' => $this->faker->randomElement(['Femenino','Masculino']) /* que se pueda escoger entre dos elementos, dentro de los corchetes se coloca
                                                         los posibles elementos con los que se pueden llenar el campo sexo */
                                                         
        ];
    }
}
