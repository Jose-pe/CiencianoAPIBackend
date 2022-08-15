<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->integer('minuto_juego');
            $table->string('tipo_gol');
            $table->bigInteger('id_partido')->unsigned();
            $table->timestamps();
            $table->foreign('id_partido')->references('id')->on('partidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gols');
    }
}
