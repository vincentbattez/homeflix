<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HfEpisodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hf_episodes', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_saison')->index();
            $table->foreign('id_saison')->references('id')->on('hf_saisons')->onDelete('cascade');

            $table->unsignedInteger('id_serie')->index();
            $table->foreign('id_serie')->references('id')->on('hf_series')->onDelete('cascade');

            $table->integer('n');
            $table->boolean('current');
            $table->boolean('viewed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hf_episodes');
    }
}
