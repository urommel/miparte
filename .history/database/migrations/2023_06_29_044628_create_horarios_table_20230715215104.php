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
            $table->unsignedBigInteger('personal_id');
            $table->boolean('lunes')->default(false);
            $table->boolean('martes')->default(false);
            $table->boolean('miércoles')->default(false);
            $table->boolean('jueves')->default(false);
            $table->boolean('viernes')->default(false);
            $table->boolean('sábado')->default(false);
            
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();
            $table->timestamps();


            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
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
