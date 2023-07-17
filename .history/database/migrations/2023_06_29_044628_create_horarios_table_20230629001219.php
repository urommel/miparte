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
            $table->id();
            $table->string('dia');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('estado');
            $table->string('personal_id');
            $table->string('proveedor_id');
            $table->string('servicio_id');
            $table->string('cliente_id');
            $table->string('sucursal_id');
            $table->string('sede_id');
            $table->string('tipo_servicio_id');
            $table->string('tipo_cita_id');
            $table->string('tipo_pago_id');
            $table->string('tipo_comprobante_id');
            
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
