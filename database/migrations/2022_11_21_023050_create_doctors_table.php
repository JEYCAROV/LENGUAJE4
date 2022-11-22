<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table-> String('nombreDoctor');
            $table -> string('apellidoDoctor');
            $table-> integer('edadDoctor');
            $table -> string('identidadDoctor');
            $table -> string ('email');
            $table -> integer('aniosExperiencia');
            $table ->string ('numeroTelefonoDoctor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
