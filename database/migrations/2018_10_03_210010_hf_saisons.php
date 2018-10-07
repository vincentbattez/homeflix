<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HfSaisons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hf_saisons', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('id_serie')->index();
            $table->foreign('id_serie')->references('id')->on('hf_series')->onDelete('cascade');

            $table->integer('n');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::dropIfExists('hf_saisons');
    }
}
