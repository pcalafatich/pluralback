<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->string('razon_social');
            $table->unsignedBigInteger('sucursal_id');
            $table->string('zona');
            $table->unsignedBigInteger('promotor_id');
            $table->string('responsable');
            $table->string('logo')->nullable($value = true);
            $table->string('calle');
            $table->integer('altura');
            $table->string('piso')->nullable($value = true);
            $table->string('local')->nullable($value = true);
            $table->string('telefono');
            $table->unsignedBigInteger('localidad_id');
            $table->string('cuit');
            $table->string('fecha_alta');
            $table->string('ingresos_brutos')->nullable($value = true);
            $table->integer('tasa_descuento');
            $table->string('email');
            $table->string('password');
            $table->string('web');
            $table->string('facebook')->nullable()->default('No posee');
            $table->string('instagram')->default('No posee');
            $table->string('twitter')->default('No posee');
            $table->integer('estado');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('comercios');
    }
};
