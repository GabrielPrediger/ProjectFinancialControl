<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->integer('numero');
            $table->integer('vitorias');
            $table->date('dt_nascimento');
            $table->date('inicio_atividades');
            $table->integer('pais_id');
            $table->integer('equipe_id');

            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('equipe_id')->references('id')->on('equipes');

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
        Schema::dropIfExists('pilotos');
    }
}
