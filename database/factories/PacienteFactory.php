<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Paciente::class;
    public function definition()
    {
        return [
            //

            /*$table-> id ();
            $table-> String('nombrePaciente');
            $table -> string('apellidoPaciente');
            $table -> dateTime('fechaNacientoPaciente');
            $table -> integer('edadPaciente');
            $table -> string('identidadPaciente');
            $table -> string('direccion');            
            $table -> timestamps();*/

            'nombrePaciente'=>$this->faker-> firstName(),
            'apellidoPaciente'=> $this->faker-> lastName(),
            'edadPaciente' => $this->faker->numberBetween(1,130),
            'identidadPaciente' =>$this->faker->numerify('####'). $this->faker->numberBetween(1900,2022)
            .$this->faker->unique()->numerify('#####'),
            'numeroTelefonoPaciente'=>$this->faker->unique()->phoneNumber('########'),
            'direccion'=>$this->faker->address(),

        ];
    }
}
