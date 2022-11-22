<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicamento;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Medicamento::factory(5000)->create();
    }
}
