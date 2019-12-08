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
            $table->float('cyber_percent')
            
            $table->timestamps();
        });

         nombre
Version: Windows 10
Última Actualización: 20/Noviembre/2019
Último incidente: N/A
Próxima revisión: 15/Diciembre/2019
Responsable del activo: Luis Mario Rodríguez Ruiz Teléfono: Llamar(525529836702)
Amenazas: Buffer overflow, stack overflow, elevación de privilegios, denegación de servicio, ejecución de código remoto, bypass de autenticación.
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
