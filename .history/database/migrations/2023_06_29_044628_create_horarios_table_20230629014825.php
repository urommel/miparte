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
    Para crear una tabla con un campo de día compuesto por checkboxes en Migrate de Laravel, primero necesitarás definir los campos para la tabla. Esto incluirá el campo para el día, así como los campos para la hora de inicio y final. Una vez que hayas definido los campos, puedes usar el


    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            //un array de dias

            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->unsignedBigInteger('personal_id');//id del personal
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
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
        Schema::dropIfExists('horarios');
    }
};
