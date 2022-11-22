<?php

namespace Database\Factories;

use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Medicamento::class;
    public function definition()
    {
        return [
            //


            'nombreMedicamento'=>$this->faker->name(),
            'fechaElaboracion'=>$this->faker->dateTime(),
            'fechaVencimiento'=>$this->faker->dateTime(),

        ];
    }
}
