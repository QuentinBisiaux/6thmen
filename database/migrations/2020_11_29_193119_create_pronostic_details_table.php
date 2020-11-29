<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePronosticDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostic_details', function (Blueprint $table) {
            $table->id();
            $table->integer('wins');
            $table->unsignedBigInteger('pronostic_id');
            $table->unsignedBigInteger('NBATeam_id')->nullable();
            $table->foreign('pronostic_id')->references('id')->on('pronostics');
            $table->foreign('NBATeam_id')->references('id')->on('NBATeams');
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
        Schema::dropIfExists('pronostic_details');
    }
}
