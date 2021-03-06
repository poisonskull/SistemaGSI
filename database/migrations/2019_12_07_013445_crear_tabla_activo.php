<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaActivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('activo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('version');
            $table->string('ultima_actualizacion');
            $table->string('ultimo_incidente');
            $table->string('proxima_revision');
            $table->string('datos_responsable');
            $table->string('tel_responsable');
            $table->float('cyber_percent',8,2);
            $table->timestamps();
        });

        Schema::create('activo_amenaza', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('amenaza_id')->unsigned();
            $table->foreign('amenaza_id')->references('id')->on('amenaza');
            $table->bigInteger('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('activo');
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
         Schema::dropIfExists('activo');
    }
}
