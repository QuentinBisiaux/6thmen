<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePronosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userPronostic_id');
            $table->unsignedBigInteger('NBATeam_id');
            $table->integer('wins');
            $table->foreign('NBATeam_id')->references('id')->on('NBATeams');
            $table->foreign('userPronostic_id')->references('id')->on('userPronostic');
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
        Schema::dropIfExists('pronostics');
    }
}
