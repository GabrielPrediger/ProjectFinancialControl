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
        Schema::create('piloto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->integer('numero');
            $table->integer('vitorias');
            $table->date('dt_nascimento');
            $table->date('inicio_atividades');
            $table->string('pais', 50);
            $table->string('equipe', 100);
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
        Schema::dropIfExists('piloto');
    }
}
