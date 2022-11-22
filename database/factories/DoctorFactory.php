<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;


class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Doctor::class;
    public function definition()
    {
        return [
            //

            'nombreDoctor'=>$this->faker-> firstName(),
            'apellidoDoctor'=> $this->faker-> lastName(),
            'edadDoctor' => $this->faker->numberBetween(28,65),
            'identidadDoctor' =>$this->faker->numerify('####'). $this->faker->numberBetween(1900,2022)
            .$this->faker->unique()->numerify('#####'),
            'email'=>$this->faker->unique()->email(),
            'numeroTelefonoDoctor'=>$this->faker->unique()->phoneNumber('########'),
            'aniosExperiencia'=>$this->faker->numberBetween(1,37),


        ];
    }
}
