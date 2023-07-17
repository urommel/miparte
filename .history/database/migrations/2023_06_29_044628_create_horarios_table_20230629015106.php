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

    Para la tabla horarios en migrate, los atributos que necesitarás son: hora_inicio, hora_fin, día_semana y descripción.
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia_semana');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

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
