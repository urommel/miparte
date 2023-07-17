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

            Hi Rommel,

Thank you for your interest in Bluelight Consulting! We wanted to let you know we received your application for PHP Developer - Remote, Full-Time, and we are delighted that you would consider joining our team.

Our team will review your application and will be in touch if your qualifications match our needs for the role. If you are not selected for this position, keep an eye on our jobs page as we're growing and adding openings.

Best,
The Bluelight Consulting Team


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
