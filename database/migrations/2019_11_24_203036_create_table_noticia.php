<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNoticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->enum('nivel',[1,2,3,4,5]);
            
            $table->bigInteger('amenaza_01')->unsigned();
            $table->foreign('amenaza_01')->references('id')->on('amenaza');
           
            $table->bigInteger('amenaza_02')->unsigned();
            $table->foreign('amenaza_02')->references('id')->on('amenaza');
           
            $table->bigInteger('amenaza_03')->unsigned();
            $table->foreign('amenaza_03')->references('id')->on('amenaza');

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
        Schema::dropIfExists('noticia');
    }
}
