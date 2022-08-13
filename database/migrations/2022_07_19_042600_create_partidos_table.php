<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('competencia');
            $table->string('marcador');
            $table->integer('goles_favor');
            $table->integer('goles_encontra');
            $table->integer('tiros');
            $table->integer('tiros_arco');
            $table->integer('posesion_balon');
            $table->integer('pases');
            $table->integer('faltas');
            $table->integer('tarjeta_amarilla');
            $table->integer('tarjeta_roja');
            $table->integer('fuera_juego');
            $table->integer('tiro_esquina');
            $table->string('resultado');
            $table->string('rival');
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
        Schema::dropIfExists('partidos');
    }
}
