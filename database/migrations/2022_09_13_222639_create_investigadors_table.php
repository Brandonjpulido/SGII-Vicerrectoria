<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigadors', function (Blueprint $table) {
            $table->id();

            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('NumeroIdentificacion');
            $table->string('Telefono');
            $table->string('CorreoInstitucional');
            
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
        Schema::dropIfExists('investigadors');
    }
};
