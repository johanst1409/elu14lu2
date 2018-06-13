<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->integer('genre_id')->unsigned();

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('genre_id')->references('id')->on('genres');
        });

        Schema::create('game_platforms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->integer('platform_id')->unsigned();

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('platform_id')->references('id')->on('platforms');
        });

        Schema::table('games', function (Blueprint $table) {
            $table->foreign('developer_id')->references('id')->on('companies');
            $table->foreign('publisher_id')->references('id')->on('companies');
        });

        Schema::table('platforms', function (Blueprint $table) {
            $table->foreign('manufacturer_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
