<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEquipeIdToPiloto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('piloto', function (Blueprint $table) {
            $table->bigInteger('equipe_id')->unsigned()->nullable();
            $table->foreign('equipe_id')->references('id')->on('equipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipe', function (Blueprint $table) {
            //
        });
    }
}
