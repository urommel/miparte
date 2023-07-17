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
        Schema::create('horarios', function (Blueprint $table) {
            // $table->id();
            // $table->string('dia');
            // $table->string('hora_inicio');
            // $table->string('hora_fin');
            // $table->unsignedBigInteger('personal_id');//id del personal
            // $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
            // $table->timestamps();

            // $table->id();
            // $table->unsignedBigInteger('personal_id');
            // $table->string('dia');
            // $table->time('hora_inicio');
            // $table->time('hora_fin');
            // $table->timestamps();

            $table->id();
            $table->boolean('lunes')->default(false);
            $table->time('hora_inicio_lunes')->nullable();
            $table->time('hora_fin_lunes')->nullable();
            $table->boolean('martes')->default(false);
            $table->time('hora_inicio_martes')->nullable();
            $table->time('hora_fin_martes')->nullable();
            $table->boolean('miercoles')->default(false);
            $table->time('hora_inicio_miercoles')->nullable();
            $table->time('hora_fin_miercoles')->nullable();
            $table->boolean('jueves')->default(false);
            $table->time('hora_inicio_jueves')->nullable();
            $table->time('hora_fin_jueves')->nullable();
            $table->boolean('viernes')->default(false);
            $table->time('hora_inicio_viernes')->nullable();
            $table->time('hora_fin_viernes')->nullable();
            $table->boolean('sabado')->default(false);
            $table->time('hora_inicio_sabado')->nullable();
            $table->time('hora_fin_sabado')->nullable();
            $table->boolean('domingo')->default(false);
            $table->time('hora_inicio_domingo')->nullable();
            $table->time('hora_fin_domingo')->nullable();
            $table->timestamps();

            $table->foreign('personal_id')->references('id')->on('personald');
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
